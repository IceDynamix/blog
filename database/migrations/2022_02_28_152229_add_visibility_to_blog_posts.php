<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVisibilityToBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->boolean('visible')->default(true);
            $table->index('visible');
        });
    }

    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn('visible');
            $table->dropIndex('visible');
        });
    }
}
