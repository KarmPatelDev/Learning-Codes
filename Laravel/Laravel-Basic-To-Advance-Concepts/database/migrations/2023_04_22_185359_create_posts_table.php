<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {  
            $table->id();  // it represent foreign key
            // $table->foreignId('user_id')->constrained(); //it make foreign key of user table id modelname_id we can also use table name in constrained('table_name') don't use plural in modelname(it use users table)
            // also file created timestamp important for foreign key make
            $table->integer('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->boolean('is_publish')->default(false);
            $table->timestamps(); // it is timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
