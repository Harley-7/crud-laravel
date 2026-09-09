<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'titulo' => 'Verity',
                'autor' => 'Colleen Hoover',
                'ano_publicacao' => 2018,
                'genero' => 'Suspense Psicológico',
                'preco' => 40.73,
                'link_compra' => 'https://www.amazon.com.br/dp/8535914846'
            ],
            [
                'titulo' => 'A Empregada',
                'autor' => 'Freida McFadden',
                'ano_publicacao' => 2021,
                'genero' => 'Suspense',
                'preco' => 29.00,
                'link_compra' => 'https://www.amazon.com.br/dp/B0B6XJZJZK'
            ],
            [
                'titulo' => 'Tudo é Rio',
                'autor' => 'Carla Madeira',
                'ano_publicacao' => 2014,
                'genero' => 'Drama',
                'preco' => 40.01,
                'link_compra' => 'https://www.amazon.com.br/dp/655535293X'
            ],
            [
                'titulo' => 'A Biblioteca da Meia-Noite',
                'autor' => 'Matt Haig',
                'ano_publicacao' => 2020,
                'genero' => 'Ficção de Cura',
                'preco' => 24.99,
                'link_compra' => 'https://www.amazon.com.br/dp/8528620206'
            ],
            [
                'titulo' => 'Quarta Asa',
                'autor' => 'Rebecca Yarros',
                'ano_publicacao' => 2023,
                'genero' => 'Fantasia',
                'preco' => 54.90,
                'link_compra' => 'https://www.amazon.com.br/dp/6555352956'
            ],
            [
                'titulo' => 'A Hora da Estrela',
                'autor' => 'Clarice Lispector',
                'ano_publicacao' => 1977,
                'genero' => 'Clássico Brasileiro',
                'preco' => 26.00,
                'link_compra' => 'https://www.amazon.com.br/dp/8520926462'
            ],
            [
                'titulo' => 'Jantar Secreto',
                'autor' => 'Raphael Montes',
                'ano_publicacao' => 2016,
                'genero' => 'Suspense Nacional',
                'preco' => 25.00,
                'link_compra' => 'https://www.amazon.com.br/dp/8535927482'
            ],
            [
                'titulo' => 'É Assim que Acaba',
                'autor' => 'Colleen Hoover',
                'ano_publicacao' => 2016,
                'genero' => 'Romance',
                'preco' => 31.00,
                'link_compra' => 'https://www.amazon.com.br/dp/6559810056'
            ],
            [
                'titulo' => 'A Hipótese do Amor',
                'autor' => 'Ali Hazelwood',
                'ano_publicacao' => 2021,
                'genero' => 'Romance Científico',
                'preco' => 38.97,
                'link_compra' => 'https://www.amazon.com.br/dp/655981017X'
            ],
            [
                'titulo' => 'Melhor do que nos Filmes',
                'autor' => 'Lynn Painter',
                'ano_publicacao' => 2021,
                'genero' => 'Romance Jovem',
                'preco' => 40.17,
                'link_compra' => 'https://www.amazon.com.br/dp/6559810196'
            ],
            [
                'titulo' => 'Nunca Minta',
                'autor' => 'Freida McFadden',
                'ano_publicacao' => 2022,
                'genero' => 'Suspense Psicológico',
                'preco' => 34.95,
                'link_compra' => 'https://www.amazon.com.br/dp/B0B6XJZJZK'
            ],
            [
                'titulo' => 'A Cirurgiã',
                'autor' => 'Leslie Wolfe',
                'ano_publicacao' => 2021,
                'genero' => 'Thriller Médico',
                'preco' => 42.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B09FJ9ZJZK'
            ],
            [
                'titulo' => 'Chama de Ferro',
                'autor' => 'Rebecca Yarros',
                'ano_publicacao' => 2024,
                'genero' => 'Fantasia',
                'preco' => 56.00,
                'link_compra' => 'https://www.amazon.com.br/dp/B0C9JZJZJZ'
            ],
            [
                'titulo' => 'Tempestade de Ônix',
                'autor' => 'Rebecca Yarros',
                'ano_publicacao' => 2025,
                'genero' => 'Fantasia',
                'preco' => 59.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B0D1JZJZJZ'
            ],
            [
                'titulo' => 'É Assim que Começa',
                'autor' => 'Colleen Hoover',
                'ano_publicacao' => 2022,
                'genero' => 'Romance',
                'preco' => 35.00,
                'link_compra' => 'https://www.amazon.com.br/dp/6559810063'
            ],
            [
                'titulo' => 'Amor, Teoricamente',
                'autor' => 'Ali Hazelwood',
                'ano_publicacao' => 2023,
                'genero' => 'Romance',
                'preco' => 44.21,
                'link_compra' => 'https://www.amazon.com.br/dp/6559810196'
            ],
            [
                'titulo' => 'Não é como nos Filmes',
                'autor' => 'Lynn Painter',
                'ano_publicacao' => 2024,
                'genero' => 'Romance Jovem',
                'preco' => 41.16,
                'link_compra' => 'https://www.amazon.com.br/dp/B0C9JZJZJZ'
            ],
            [
                'titulo' => 'O Acidente',
                'autor' => 'Freida McFadden',
                'ano_publicacao' => 2023,
                'genero' => 'Suspense',
                'preco' => 32.00,
                'link_compra' => 'https://www.amazon.com.br/dp/B0C1JZJZJZ'
            ],
            [
                'titulo' => 'Dom Casmurro',
                'autor' => 'Machado de Assis',
                'ano_publicacao' => 1899,
                'genero' => 'Clássico Brasileiro',
                'preco' => 29.90,
                'link_compra' => 'https://www.amazon.com.br/dp/6586490081'
            ],
            [
                'titulo' => 'Beautiful World, Where Are You',
                'autor' => 'Sally Rooney',
                'ano_publicacao' => 2025,
                'genero' => 'Ficção Contemporânea',
                'preco' => 42.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B08X6MZJZJ'
            ],
            [
                'titulo' => 'The Daughter of Doctor Moreau',
                'autor' => 'Silvia Moreno-Garcia',
                'ano_publicacao' => 2025,
                'genero' => 'Ficção Científica',
                'preco' => 47.50,
                'link_compra' => 'https://www.amazon.com.br/dp/B09B1JZJZJ'
            ],
            [
                'titulo' => 'The Paris Apartment',
                'autor' => 'Lucy Foley',
                'ano_publicacao' => 2025,
                'genero' => 'Suspense',
                'preco' => 39.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B09T1JZJZJ'
            ],
            [
                'titulo' => 'The House in the Cerulean Sea',
                'autor' => 'T.J. Klune',
                'ano_publicacao' => 2025,
                'genero' => 'Fantasia',
                'preco' => 44.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B08B1JZJZJ'
            ],

            [
                'titulo' => 'Hell of a Book',
                'autor' => 'Jason Mott',
                'ano_publicacao' => 2025,
                'genero' => 'Drama Literário',
                'preco' => 41.00,
                'link_compra' => 'https://www.amazon.com.br/dp/B08T1JZJZJ'
            ],
            [
                'titulo' => 'The Lincoln Highway',
                'autor' => 'Amor Towles',
                'ano_publicacao' => 2025,
                'genero' => 'Romance Histórico',
                'preco' => 45.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B09L1JZJZJ'
            ],
            [
                'titulo' => 'The Thursday Murder Club',
                'autor' => 'Richard Osman',
                'ano_publicacao' => 2025,
                'genero' => 'Mistério',
                'preco' => 38.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B08L1JZJZJ'
            ],
            [
                'titulo' => 'The Book of Form and Emptiness',
                'autor' => 'Ruth Ozeki',
                'ano_publicacao' => 2025,
                'genero' => 'Ficção Literária',
                'preco' => 43.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B09F1JZJZJ'
            ],
            [
                'titulo' => 'Persuasion (Reimaginada)',
                'autor' => 'Jane Austen & Nita Prose',
                'ano_publicacao' => 2025,
                'genero' => 'Romance Clássico',
                'preco' => 36.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B08P1JZJZJ'
            ],
            [
                'titulo' => 'Malibu Rising',
                'autor' => 'Taylor Jenkins Reid',
                'ano_publicacao' => 2025,
                'genero' => 'Drama Familiar',
                'preco' => 40.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B09M1JZJZJ'
            ],
            [
                'titulo' => 'Sem Coração',
                'autor' => 'Elsie Silver',
                'ano_publicacao' => 2025,
                'genero' => 'Romance',
                'preco' => 39.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B0C1JZJZJZ'
            ],
            [
                'titulo' => 'Como a Neve Cai',
                'autor' => 'Erin Doom',
                'ano_publicacao' => 2025,
                'genero' => 'Romance Jovem',
                'preco' => 42.00,
                'link_compra' => 'https://www.amazon.com.br/dp/B0C2JZJZJZ'
            ],
            [
                'titulo' => 'O Dilema da Noiva',
                'autor' => 'Tessa Bailey',
                'ano_publicacao' => 2025,
                'genero' => 'Comédia Romântica',
                'preco' => 38.50,
                'link_compra' => 'https://www.amazon.com.br/dp/B0C3JZJZJZ'
            ],
            [
                'titulo' => 'A Psicologia Financeira',
                'autor' => 'Morgan Housel',
                'ano_publicacao' => 2025,
                'genero' => 'Finanças Pessoais',
                'preco' => 36.90,
                'link_compra' => 'https://www.amazon.com.br/dp/B08F1JZJZJ'
            ]

        ]);
    }
}
