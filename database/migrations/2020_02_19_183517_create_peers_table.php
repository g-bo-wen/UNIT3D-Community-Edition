<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('peers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('peer_id', 60)->nullable();
            $table->string('md5_peer_id')->nullable();
            $table->string('info_hash')->nullable();
            $table->string('ip')->nullable();
            $table->unsignedSmallInteger('port')->nullable();
            $table->string('agent')->nullable();
            $table->unsignedBigInteger('uploaded')->nullable();
            $table->unsignedBigInteger('downloaded')->nullable();
            $table->unsignedBigInteger('left')->nullable();
            $table->boolean('seeder')->nullable();
            $table->nullableTimestamps();
            $table->unsignedBigInteger('torrent_id')->nullable();
            $table->integer('user_id')->nullable();
        });

        Schema::table('peers', function (Blueprint $table) {
            $table->index('user_id', 'fk_peers_users1_idx');
            $table->index('torrent_id', 'fk_peers_torrents1_idx');

            $table->foreign('torrent_id')->references('id')->on('torrents');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists('peers');
    }

}