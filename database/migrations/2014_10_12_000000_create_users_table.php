<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('first_name', 191);
            $table->string('last_name', 191);
            $table->timestamp('birthday')->nullable();

            $table->string('email', 191)->unique()->nullable();
            $table->string('phone_number', 50)->unique()->nullable();
            $table->string('username', 191)->unique()->nullable();
            $table->string('password')->nullable();

            $table->char('locale', 4)->default('en');
            $table->enum('gender', ['M', 'F', 'U'])->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->integer('city_id')->unsigned()->nullable();
            $table->string('timezone', 100)->default('UTC')->comment = 'Taken From timezones Table';
            $table->string('type', 20)->default('DEFAULT')->comment = 'Default User Group';
            $table->string('status', 20)->default('ACTIVE')->comment = 'Taken From users_base_data Table';
            $table->rememberToken();

            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_number_verified_at')->nullable();

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->timestamp('disabled_at')->nullable();

            $table->string('whatsapp', 50)->nullable();
            $table->text('facebook', 1000)->nullable();
            $table->text('instagram', 1000)->nullable();
            $table->text('twitter', 1000)->nullable();
            $table->text('youtube', 1000)->nullable();
            $table->text('linkedin', 1000)->nullable();

            $table->string('avatar', 500)->nullable();
            $table->string('bio', 500)->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
