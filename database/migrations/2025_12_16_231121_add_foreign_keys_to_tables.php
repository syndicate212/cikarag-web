<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // anggarans
        Schema::table('anggarans', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->cascadeOnDelete();
        });

        // announcements
        Schema::table('announcements', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->cascadeOnDelete();
        });

        // beritas
        Schema::table('beritas', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('post_statuses');
            $table->foreign('kategori_id')->references('id')->on('kategoris');
        });

        // comments
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('berita_id')->references('id')->on('beritas')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });

        // comment_replies
        Schema::table('comment_replies', function (Blueprint $table) {
            $table->foreign('comment_id')->references('id')->on('comments')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });

        // galleries
        Schema::table('galleries', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // kategoris
        Schema::table('kategoris', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // situses
        Schema::table('situses', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // umkms
        Schema::table('umkms', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // layanans
        Schema::table('layanans', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // pekerjaans
        Schema::table('pekerjaans', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // perangkat_desas
        Schema::table('perangkat_desas', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // petas
        Schema::table('petas', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // sejarahs
        Schema::table('sejarahs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // video_profils
        Schema::table('video_profils', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // visi_misis
        Schema::table('visi_misis', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        // wilayahs
        Schema::table('wilayahs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::table('anggarans', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('announcements', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('beritas', function (Blueprint $t) {
            $t->dropForeign(['user_id']);
            $t->dropForeign(['status_id']);
            $t->dropForeign(['kategori_id']);
        });
        Schema::table('comments', fn (Blueprint $t) => $t->dropForeign(['berita_id','user_id']));
        Schema::table('comment_replies', fn (Blueprint $t) => $t->dropForeign(['comment_id','user_id']));
        Schema::table('galleries', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('kategoris', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('situses', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('umkms', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('layanans', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('pekerjaans', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('perangkat_desas', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('petas', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('sejarahs', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('video_profils', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('visi_misis', fn (Blueprint $t) => $t->dropForeign(['user_id']));
        Schema::table('wilayahs', fn (Blueprint $t) => $t->dropForeign(['user_id']));
    }
};
