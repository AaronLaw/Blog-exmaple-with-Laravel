## Create a Blog with Laravel

I mainly learn it from: [Learning Laravel: Simple Laravel Blog: Setting Up & Migrations Part 1] (http://learninglaravel.net/simple-laravel-blog-setting-up-migrations-part-1), with the supplementory of [] (),  and lookup command and meaning in [the doc of Laravel 4.2] (http://laravel.com/docs/4.2/)

(Laravel follows Rails's convention.)

First, create a `blog` project:

    laravel new blog # ~/.composer/vendor/bin/laravel

This will install/copy a set of laravel to a `blog` folder, which is located in the pwd.

Then change the db setting, and `debug=>true` in `blog/app/config/database.php' and `blog/app/config/app.php'

Create post table:

    php artisan migrate:make create_posts_table

Complete the `up()` and `down()` functions in the newly created migration file, which is located at `blog/app/database/migrations/`

    #php
    public function up()
    {
        //
        Schema::create('posts', function($t) {
            $t->increments('id');
            $t->string('title', 200);
            $t->string('slug', 400);
            $t->boolean('draft');
            $t->text('body');
            $t->timestamps();
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('posts');
    }

Then migrate it:

    php artisan migrate

[#] (http://laravel.com/docs/4.2/migrations)

Now, I've created a Posts table, and connect to db.
(part1 is finished.)