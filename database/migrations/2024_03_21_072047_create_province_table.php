<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('province', function (Blueprint $table) {
            $table->increments('province_id')->unsigned();
            $table->string('province_code', 10);
            $table->string('province_name', 50);
            $table->timestamps();
            $table->softDeletes();
        });

        // Memasukkan data ke dalam tabel province
        DB::table('province')->insert([
            ['province_code' => 'NTB', 'province_name' => 'Nusa Tenggara Barat', 'created_at' => now(), 'updated_at' => now()],
            ['province_code' => 'NTT', 'province_name' => 'Nusa Tenggara Timur', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('province');
    }
};
