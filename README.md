# DALL-E Prompt Helper

## About

This is a web application designed for the purpose of selecting and customizing image generation text prompts, with the goal of simplifying and improving the user experience of DALL-E image creation, primarily suppporting DALL-E 3.

The application offers a user-friendly GUI for ease of input, and guides the user on best practices for text prompts.

## Prerequisites

Before we start, make sure you have the following installed:
1. PHP version 8.2 or later
2. Laravel version 10 or later
3. Composer ([Installation](https://getcomposer.org/download/))
4. XAMPP (Apache) ([Download](https://www.apachefriends.org/download.html))
5. Node.js - npm ([Intallation](https://nodejs.org/en/download/package-manager))
6. Livewire 3 ([Installation](https://livewire.laravel.com/docs/installation))
7. [7zip](https://www.7-zip.org/download.html)
8. [MailTrap](https://mailtrap.io/home) (For email verificaition testing)

## Installation

1. Unzip the downloaded archive
2. Copy and paste DALLE-Prompt-Helper-Main folder in your projects folder. 
3. In your terminal run composer install and npm install
4. In phpmyadmin, Create a database named “dalle_helper” and run php artisan db:seed --class=ImportDataSeeder to seed the records into the tables. Alternatively, you can import the database/seed/dalle_helper.sql into the created database (“dalle_helper”) 
5. Copy .env.backup to .env and updated the configurations (mainly the database configuration)
6. In your terminal run php artisan key:generate
7. Run php artisan storage:link to create the storage symlink.
8. Then finally launch the command php artisan serve.

## How to Use

First, you start by typing a clear and concise concept/description of the image you intend to create. You can then specify parameters and style presets of the image, and the application will generate the output.

After the output prompt has been generated, you can then copy and paste it in DALL-E, or save it to your "Saved Prompts" list.

This is a non-commercial software designed both for the purpose of improving productivity at companies and groups relying on AI image generation, and individuals who enjoy experimenting with generative AI for fun.

For further information, you can refer to the documentation linked here: https://docs.google.com/document/d/15P9EBTjKnpde_tuiPd_HqiiAab2eY9TTZR-FUI_OpN0/edit?usp=sharing
