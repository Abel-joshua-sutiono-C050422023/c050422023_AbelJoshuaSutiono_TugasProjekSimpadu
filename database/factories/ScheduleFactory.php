<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition(): array
    {
            return [
            'jam_mulai' => $this->faker->dateTimeThisMonth,
            'jam_selesai' => $this->faker->dateTimeThisMonth,
            'hari' => $this->faker->randomElement(['senin','selasa','rabu','kamis','jumat']),
            'subject_id' => $this->faker->randomDigit,
            'ruangan' => $this->faker->randomLetter . $this->faker->randomNumber,
            'kode_absensi' => $this->faker->randomLetter . $this->faker->randomNumber. $this->faker->randomNumber,
            'tahun_akademik' => $this->faker->randomElement(['2021/2022','2023/2024','2024/2025','2019/2020']),
            'semester' => $this->faker->randomDigit,
            'created_by' => $this->faker->randomDigit,
            'updated_by' => $this->faker->randomDigit,
        ];
    }
}
