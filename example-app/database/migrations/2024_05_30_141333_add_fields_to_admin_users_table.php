<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToAdminUsersTable extends Migration
{
    public function up()
    {
        Schema::table('admin_users', function (Blueprint $table) {
            // Kiểm tra và chỉ thêm cột nếu chúng chưa tồn tại
            if (!Schema::hasColumn('admin_users', 'username')) {
                $table->string('username')->unique();
            }
            if (!Schema::hasColumn('admin_users', 'password')) {
                $table->string('password');
            }
            if (!Schema::hasColumn('admin_users', 'name')) {
                $table->string('name');
            }
        });
    }

    public function down()
    {
        Schema::table('admin_users', function (Blueprint $table) {
            // Chỉ xóa cột nếu chúng tồn tại
            if (Schema::hasColumn('admin_users', 'username')) {
                $table->dropColumn('username');
            }
            if (Schema::hasColumn('admin_users', 'password')) {
                $table->dropColumn('password');
            }
            if (Schema::hasColumn('admin_users', 'name')) {
                $table->dropColumn('name');
            }
        });
    }
}
