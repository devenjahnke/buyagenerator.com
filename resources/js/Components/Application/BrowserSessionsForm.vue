<template>
    <div class="min-h-full flex flex-col justify-between">
        <div class="flex-1">
            <div
                class="flex items-center py-2 px-4 even:bg-primary-light"
                v-for="(session, i) in sessions"
                :key="i"
            >
                <div class="flex-initial">
                    <!-- Desktop Icon -->
                    <PhMonitor
                        class=""
                        :size="30"
                        v-if="session.agent.is_desktop"
                    />
                    <!-- Mobile Phone Icon -->
                    <PhDeviceMobile
                        class=""
                        :size="30"
                        v-else
                    />
                </div>
                <div class="ml-4 flex-grow flex flex-col">
                    <p class="mt-0">
                        {{ session.agent.platform }} - {{ session.agent.browser }}
                    </p>
                    <div class="flex space-x-2">
                        <p class="mt-0 text-sm text-secondary-dark">
                            {{ session.ip_address }} |
                        </p>
                        <p
                            class="mt-0 text-sm text-green-500"
                            v-if="session.is_current_device"
                        >
                            This device
                        </p>
                        <p
                            class="mt-0 text-sm text-secondary-dark"
                            v-else
                        >
                            Last active {{ session.last_active }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <form
                action="#"
                v-on:submit.prevent="confirmLogout"
            >
                <FSubmitButton class="mt-6">
                    Logout other sessions.
                </FSubmitButton>
            </form>
        </div>
        <FCardModal
            :show="confirmingLogout"
            v-on:close="confirmingLogout = false"
        >
            <template v-slot:header>
                <h4>Enter your password.</h4>
                <hr class="mt-4" />
            </template>
            <template v-slot:body>
                <p class="mt-4">
                    To confirm that your would like to logout of all other active sessions, please enter your password.
                </p>
                <div class="mt-4">
                    <form
                        action="#"
                        v-on:submit.prevent="handleLogoutActiveSessions"
                    >
                        <div class="grid grid-cols-1 gap-5">
                            <!-- Password -->
                            <div class="form-group-vertical col-span-1">
                                <label
                                    for="password"
                                    class="form-label"
                                >
                                    Password
                                </label>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-input"
                                    autocomplete="new-password"
                                    v-model="form.password"
                                    required
                                >
                                <FInputError
                                    :message="form.error('password')"
                                    class=""
                                />
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group-vertical col-span-1">
                                <FSubmitButton>
                                    Logout other sessions.
                                </FSubmitButton>
                            </div>
                            <div class="col-span-1 flex justify-end">
                                <a
                                    href="#"
                                    class="font-serif text-sm text-right underline hover:text-accent-light"
                                    v-on:click.prevent="confirmingLogout = false"
                                >
                                    Nevermind.
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </template>
        </FCardModal>
    </div>
</template>

<script>
import { PhMonitor, PhDeviceMobile } from "phosphor-vue";
import FSubmitButton from "@/Components/Framework/Form/FSubmitButton";
import FCardModal from "@/Components/Framework/FCardModal";
import FInputError from "@/Components/Framework/Form/FInputError";

export default {
    name: 'BrowserSessionsForm',
    components: {
        FSubmitButton,
        PhMonitor,
        PhDeviceMobile,
        FCardModal,
        FInputError,
    },
    props: {
        sessions: {
            required: true,
        }
    },
    data: function () {
        return {
            form: this.$inertia.form({
                '_method': 'DELETE',
                password: '',
            }, {
                bag: 'logoutOtherBrowserSessions'
            }),
            confirmingLogout: false,
        };
    },
    methods: {
        handleLogoutActiveSessions: function () {
            this.form.post(route('other-browser-sessions.destroy'), {
                preserveScroll: true
            }).then(response => {
                if (!this.form.hasErrors()) {
                    this.confirmingLogout = false;
                }
            });
        },
        confirmLogout: function () {
            this.form.password = '';
            this.confirmingLogout = true;
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
