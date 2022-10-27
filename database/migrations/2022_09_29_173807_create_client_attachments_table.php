<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_attachments', function (Blueprint $table) {
            $table->id('client_attachment_id');
            $table->integer('client_id')->unsigned();
            $table->string('document_type_id');
            $table->string('attachment_name');
            $table->timestamp('created_dt');
            $table->foreign('client_id')->references('client_id')->on('client_details')
            ->onDelete('cascade');
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
        Schema::dropIfExists('client_attachments');
    }
}
