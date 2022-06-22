# Разработка

## Инициализация
Создать папку на сервере *(OpenServer, Mamp)* и в ней использовать
```
git init
git pull https://github.com/mb-exec/fractales.dev.git
git remote add origin git@github.com:mb-exec/fractales.dev.git
```

## Настройки
В папке `.dev` в файле `config.js` указать\расскоментировать url на котором запускается локальный сервер

```js
// const SERVER_BASE_URL = 'http://'
const SERVER_BASE_URL = 'http://localhost:8888'
```
Так же при изменении гитхаба заменить ( необходимо для `npm run deploy` ):


```js
const GITHUB_URL = 'https://github.com/mb-exec/fractales.dev.git'
const GITHUB_SSH = 'git@github.com:mb-exec/fractales.dev.git'
```
Перейти в папку `.dev`
```
cd .dev/
npm i
```
### Доступные команды

Запуск режима для разработки
```
npm start
```
Собрать готовый проект (сжатие, минификация и т.п.)
```
npm run build
```
Собрать проект(build) и загрузить на гитхаб в ветку prod
```
npm run deploy
```

## Структура
- Основной файл с информацией по всему проекту `functions.php`

- В нем подключаются все индексные файли из папок 
  ```
  ./app/inc 
  ./app/db 
  ./app/components
  ```
- Отдельная информация по страницам настраивается в файле `./app/db/_pages.php`. Вся информация для шаблона будет доступна в переменной `$page`
  ```php
  [
    'global' => ... // основные скрипты и стили для всех страниц

    'about' => ... // информация для шаблона about.php
    'fuenf' => [ // информация для шаблона fuenf.php
      'title' => ... // для тэга title в head
      'description' => ...
      'scripts' => [ // список имен файлов, которые будут подключены в шаблоне
        'main' // подключает /assets/js/main.js 
      ]
      'styles' => [
        ...
      ]
    ]
  ]
  ```

## Создание нового кейса
- в папке `./cases/%name%.php` создать шаблон страницы 
- в `./app/db/_pages.php` добавить поле с названием шаблона
  ```php
    $pages = [
      ...
      '%name%' => [
        'title' => '',
        'description' => '',
        'scripts' => [],
        'styles' => [
          'case' // стили для стандартного кейса
        ],
        'og' => [  // настройки для Open Graph
          'type' => 'website',
          'url' => "$site_url/%name%",
          'img' => "$site_url/assets/img/%pic%.png",
          'img_type' => 'image/png',
        ]
      ],
    ]

  ``` 
- (если кейс стандартный) создать информацию для шаблона в `./app/db/single-cases/` и заполнить по шаблону из этой папки `__template__.php`
- добавить кейс в файле `./app/db/_cases/`
  ```
    require 'single-cases/%name%.php';
  ```
- в `./cases/%name%.php` заполнить 
  ```php
  require '../app/templates/header.php';

  // если заполнен шаблон
  $case = $db['cases']['%name%'];
  require '../app/templates/case.php';
  // <-- ! -->

  require '../app/templates/footer.php';
  ```