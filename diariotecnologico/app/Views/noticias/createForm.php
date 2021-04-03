<?php

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#loading-this-helper

helper('form');


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_open
echo form_open('noticias/createbe');


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label

echo '<br>';


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('Titulo Noticia', 'titulo');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('titulo', 'Titulo Noticia');

echo '<br>';


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('link', 'link');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('link', 'link ');

echo '<br>';

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('Descricao noticia', 'desc');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('desc', 'Descricao noticia');

echo '<br>';

echo form_label('Linguagem (idioma)', 'ling');

echo form_input('language', 'Linguagem (idioma)');

echo '<br>';
echo '<br>';

echo form_label('Data', 'data');

echo form_input('data', 'Data');

echo '<br>';

echo form_label('Image Link ', 'img');

echo form_input('imgurl', 'Image Link ');
//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input

echo '<br>';

echo form_label('Titulo da Imagem', 'img1');

echo form_input('imgtitle', 'Iitulo da Imagem');
//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input

echo '<br>';

echo form_label('Corpo da Noticia', 'body');

echo form_input('body', 'Corpo da Noticia');
//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input

echo '<br>';
// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('ultimoUsuario', 'ultimoUsuario');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('ultimoUsuario', 'ultimoUsuario', ['readonly' => 'true']);

echo '<br>';


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_submit
echo form_submit('btnEnvia', 'Envia Form');

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_close
echo form_close();
