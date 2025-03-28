<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action('carbon_fields_register_fields', 'kinza_carbon');

function kinza_carbon(): void
{
    Container::make('theme_options', 'Контакты')
        ->set_icon('dashicons-email')
        ->add_fields([
            Field::make('text', 'contact_email', 'Email')
                ->set_attribute('type', 'email')
                ->set_required()
                ->set_default_value('kinza-agency@ya.ru'),
            Field::make('text', 'contact_telegram', 'Telegram')
                ->set_required(),
            Field::make('text', 'contact_vk', 'VK')
                ->set_default_value('https://vk.com/club224388965'),
            Field::make('text', 'contact_phone', 'Телефон')
                ->set_attribute('type', 'tel'),
        ]);
}
