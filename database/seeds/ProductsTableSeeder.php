<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBookPro 1625',
            'slug' => 'macbook-pro-1625',
            'details' => 'Nouveaux processeurs Intel hexacœurs et quadricœurs de 8e génération.',
            'price' => 149999,
            'description' => 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.',
        ]);

        Product::create([
            'name' => 'MacBookPro 32Go-22',
            'slug' => 'macbook-pro-32go-2',
            'details' => 'Une grande puissance implique de grandes capacités.',
            'price' => 149999,
            'description' => 'vec des processeurs Intel Core de 8e génération, le MacBook Pro bat des records de puissance en matière de calcul. Le modèle 15 pouces intègre désormais un processeur Intel Core i9 hexacœur jusqu’à 70 % plus rapide que ceux de génération précédente, avec un Turbo Boost pouvant atteindre 4,8 GHz.',
        ]);

        Product::create([
            'name' => 'MacBookPro 5666',
            'slug' => 'macbook-pro-5666',
            'details' => 'Nouveaux processeurs Intel hexacœurs et quadricœurs de 8e génération.',
            'price' => 249999,
            'description' => 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.',
        ]);

        Product::create([
            'name' => 'MacBook 32Go 265',
            'slug' => 'macbook-32go-265',
            'details' => 'Une grande puissance implique de grandes capacités.',
            'price' => 169999,
            'description' => 'vec des processeurs Intel Core de 8e génération, le MacBook Pro bat des records de puissance en matière de calcul. Le modèle 15 pouces intègre désormais un processeur Intel Core i9 hexacœur jusqu’à 70 % plus rapide que ceux de génération précédente, avec un Turbo Boost pouvant atteindre 4,8 GHz.',
        ]);

        Product::create([
            'name' => 'MacBookPro 120',
            'slug' => 'macbook-pro-120',
            'details' => 'Nouveaux processeurs Intel hexacœurs et quadricœurs de 8e génération.',
            'price' => 329999,
            'description' => 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.',
        ]);

        Product::create([
            'name' => 'MacBookPro 32Go',
            'slug' => 'macbook-pro-32go-1545',
            'details' => 'Une grande puissance implique de grandes capacités.',
            'price' => 529999,
            'description' => 'vec des processeurs Intel Core de 8e génération, le MacBook Pro bat des records de puissance en matière de calcul. Le modèle 15 pouces intègre désormais un processeur Intel Core i9 hexacœur jusqu’à 70 % plus rapide que ceux de génération précédente, avec un Turbo Boost pouvant atteindre 4,8 GHz.',
        ]);

        Product::create([
            'name' => 'MacBookPro Rétina',
            'slug' => 'macbook-pro-retina',
            'details' => 'Touch Bar. Pour un travail plus productif.',
            'price' => 109999,
            'description' => 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.',
        ]);

        Product::create([
            'name' => 'MacBookPro QuadCore',
            'slug' => 'macbook-pro-265',
            'details' => 'Une grande puissance implique de grandes capacités.',
            'price' => 299999,
            'description' => 'vec des processeurs Intel Core de 8e génération, le MacBook Pro bat des records de puissance en matière de calcul. Le modèle 15 pouces intègre désormais un processeur Intel Core i9 hexacœur jusqu’à 70 % plus rapide que ceux de génération précédente, avec un Turbo Boost pouvant atteindre 4,8 GHz.',
        ]);

        Product::create([
            'name' => 'MacBookPro 9562',
            'slug' => 'macbook-pro-9562',
            'details' => 'Nouveaux processeurs Intel hexacœurs et quadricœurs de 8e génération.',
            'price' => 139999,
            'description' => 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.',
        ]);

        Product::create([
            'name' => 'MacBookPro 64Go',
            'slug' => 'macbook-pro-64go-5699',
            'details' => 'Une grande puissance implique de grandes capacités.',
            'price' => 879999,
            'description' => 'vec des processeurs Intel Core de 8e génération, le MacBook Pro bat des records de puissance en matière de calcul. Le modèle 15 pouces intègre désormais un processeur Intel Core i9 hexacœur jusqu’à 70 % plus rapide que ceux de génération précédente, avec un Turbo Boost pouvant atteindre 4,8 GHz.',
        ]);

    }
}
