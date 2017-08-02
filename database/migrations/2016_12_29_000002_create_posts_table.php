<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
//	    echo 'Creating posts table' . PHP_EOL;

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('is_published')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('content')->nullable();
            $table->text('notes')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('fb_title')->nullable();
            $table->string('gp_title')->nullable();
            $table->string('tw_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('image')->nullable();
            $table->string('banner')->nullable();
            $table->integer('view_count')->default('0')->unsigned()->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
	        $table->engine = 'InnoDB';

        });

    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        $table = 'posts';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('posts');

        // $table = 'blog_comments';
        // Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        // Schema::drop('blog_comments');
    }
}
