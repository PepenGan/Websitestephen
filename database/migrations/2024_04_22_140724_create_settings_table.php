<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });
        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Website Sederhana',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_location',
            'label'=>'Alamat Kampus',
            'value'=>'Malang,JawaTimur,Indonesia',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_Instagram',
            'label'=>'Instagram',
            'value'=>'https://www.instagram.com/brostephn?igsh=dTVubzlvZzNibzVj',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_text_description',
            'label'=>'Site Description',
            'value'=>'Belajar Menjadi Orang sederhana',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
