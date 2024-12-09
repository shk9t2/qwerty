<?php
require_once '../Services/Db.php';

use Services\Db;

try {
    $db = Db::getInstance();
    $result = $db->query('SHOW TABLES LIKE "articles"', []);
    if (!empty($result)) {
        echo "Таблица 'articles' существует.";
    } else {
        echo "Таблицы 'articles' не существует.";
    }
} catch (Exception $e) {
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
}
