<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $profile = [
        'name' => 'Nemerie Lesley Ann L. Acuña',
        'role' => 'Information Technology Student',
        'tagline' => 'Motivated IT student who loves learning new things and taking on new challenges.',
        'bio' => 'Hello! I am Nemerie Lesley Ann L. Acuña, an Information Technology student. I am motivated and enjoy learning new things and improving my skills, and I am always willing to take on new challenges and opportunities.',
        'email' => 'nemerielesleyann.acuna@gmail.com',
        'phone' => '+63 967 203 2350',
        'location' => 'Sabnangan, Luba, Abra',
        'avatar' => asset('images/nems.jpg'),
        'github' => 'https://github.com/shainahblaza26-maker',
        'facebook' => 'https://www.facebook.com/share/1HiH4NDC3C/',
        'instagram' => 'https://www.instagram.com/lesley__acuna',
        'telegram' => 'https://t.me/+639672032350',
    ];

    $education = [
        [
            'school' => 'Data Center College of the Philippines',
            'location' => 'Bangued, Abra',
            'degree' => 'Bachelor of Science in Information Technology (BSIT)',
            'years' => '2023 – Present',
            'detail' => '',
        ],
        [
            'school' => 'Luba-Tubo Catholic School Inc.',
            'location' => 'Luba, Abra',
            'degree' => 'Secondary Education (Junior & Senior High School)',
            'years' => '2017-2023',
            'detail' => '',
        ],
    ];

    $certificates = [
        [
            'title' => 'Online Safety Through Nettiquette',
            'issuer' => 'DICT',
            'year' => 'July 23, 2026',
            'detail' => '',
            'image' => asset('images/cert/cert.png'),
            'link' => asset('images/cert/cert.png'),
        ],
    ];

    $projects = [
        [
            'title' => 'Grade Computation System',
            'description' => '',
            'tech' => ['VB. Net'],
            'github' => 'https://github.com/shainahblaza26-maker/grade-computation-system',
            'image' => asset('images/proj/gradecomp_proj.jpg'),
            'link' => asset('images/proj/gradecomp_proj.jpg'),
        ],
        [
            'title' => 'Permanent Record System',
            'description' => '',
            'tech' => ['VB. Net'],
            'github' => '',
            'image' => asset('images/proj/permanentrec_proj.jpg'),
            'link' => asset('images/proj/permanentrec_proj.jpg'),
        ],
        [
            'title' => 'Portfolio Website',
            'description' => '',
            'tech' => ['Laravel', 'Blade', 'CSS'],
            'github' => 'https://github.com/shainahblaza26-maker/portfolio',
            'image' => asset('images/proj/portfolio.png'),
            'link' => asset('images/proj/portfolio.png'),
        ], 
    ];

    $socials = [
        ['name' => 'Facebook', 'icon' => 'facebook', 'url' => $profile['facebook']],
        ['name' => 'Instagram', 'icon' => 'instagram', 'url' => $profile['instagram']],
        ['name' => 'Telegram', 'icon' => 'telegram', 'url' => $profile['telegram']],
        ['name' => 'Email', 'icon' => 'mail', 'url' => 'mailto:' . $profile['email']],
    ];

    return view('home', compact('profile', 'education', 'certificates', 'projects', 'socials'));
});
