<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentationPageSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentation_page_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')
                ->constrained('documentation_pages', 'id')
                ->cascadeOnDelete();
            $table->string('title');
            $table->text('content');
            $table->unsignedInteger('order');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentation_page_sections');
    }
}
