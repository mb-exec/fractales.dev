# Разработка

## Инициализация
Создать папку на сервере и в ней использовать

<mark>Зависит от github</mark>
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
Так же при изменении гитхаба заменить:

```js
const GITHUB_URL
const GITHUB_SSH
```
Перейти в папку `.dev`
```
cd .dev/
```
И выполнить
```
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
Основной файл с информацией по всему проекту `functions.php`

В нем подключаются все индексные файли из папок 
```
./app/inc 
./app/db 
./app/components
```
Отдельная информация по страницам настраивается в файле `./app/db/_pages.php`
```
[
  'global' => ... // основные скрипты и стили для всех страниц

  'about' => ... // информация для шаблона about.php
  'fuenf' => ... // информация для шаблона fuenf.php
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
          'case' =>  '1.0.0', // стили для стандартного кейса
        ],
      ],
    ]

  ``` 
- (если кейс стандартный) создать информацию для шаблона в `./app/db/single-cases/` и заполнить по шаблону из этой папки `__template__.php`
- добавить кейс в файле `./app/db/_cases/`
- в `./cases/%name%.php` заполнить 
  ```php
  require '../app/templates/header.php';

  // если заполнен шаблон
  $case = $db['cases']['%name%'];
  require '../app/templates/case.php';
  // <-- ! -->

  require '../app/templates/footer.php';
  ```