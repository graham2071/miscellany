<?php

return [
    'age'           => [
        'description'   => 'Вы можете привязать Персонажа к Календарю Кампании, открыв вкладку напоминаний при просмотре страницы Персонажа. Там добавьте новое напоминание и задайте тип "Рождение" или "Смерть". Для автоматического вычисления возраста персонажа. Если заданы даты и рождения и смерти, то будут отображены обе даты и возраст при смерти. Если задана только дата рождения, будет показана дата и текущий возраст. Если задана только дата смерти, будет показана дата и число лет, прошедших с момента смерти.',
        'title'         => 'Возраст и смерть Персонажа',
    ],
    'attributes'    => [
        'con'           => 'Телосложение',
        'description'   => 'Используйте атрибуты, чтобы обозначить нетекстовые характеристики объекта. Вы можете ссылаться в атрибутах на объекты с помощью синтаксиса продвинутой ссылки типа :mention. Вы также можете ссылаться на другие атрибуты с помощью синтаксиса типа :attribute.',
        'level'         => 'Уровень',
        'link'          => 'Функции атрибутов',
        'math'          => 'Также можете поэкспериментировать с некоторыми основными математическими действиями. Например, :example перемножит атрибуты :level и :con этого объекта. Если вы хотите округлить в большую или меньшую степень, можете использовать :floor или :ceil.',
        'title'         => 'Атрибуты',
    ],
    'dice'          => [
        'description'               => 'Для разных видов кубиков можно написать "d20", "4d4+4", "d%" для процентника и "df" для FUDGE кубика.',
        'description_attributes'    => 'Также можно задать атрибут Персонажа с помощью синтаксиса {character.attribute_name}. Например, {character.level}d6+{character.wisdom}.',
        'more'                      => 'Больше функций описано на странице плагинов Dice Roller.',
        'title'                     => 'Броски Кубиков',
    ],
    'filters'       => [
        'description'   => 'Вы можете использовать фильтры, чтобы ограничить количество показываемых результатов в списках. Текстовые поля поддерживают различные функции для детального управления фильтрованием.',
        'empty'         => 'Ели вписать :tag в поле, то будут найдены все объекты у, которых это поле пустое.',
        'ending_with'   => 'Если поставить в конце вашего текста :tag, то вы найдете все объекты с точно таким же текстом в этом поле.',
        'session'       => 'Фильтры и колонки, назначенные для списка объектов, сохраняются в вашей сессии, так что, пока вы подключены, вам не нужно их задавать заново для каждой страницы.',
        'starting_with' => 'Если поставить в начале вашего текста :tag, то вы найдете все объекты, у которых нет такого текста в этом поле.',
        'title'         => 'Как использовать фильтры',
    ],
    'link'          => [
        'attributes'        => 'Вы можете ссылаться на атрибуты объекта, написав :code. Это работает только для существующих атрибутов объекта.',
        'auto_update'       => 'Ссылки на другие объекты будут автоматически обновлены при изменении названия или описания этих объектов.',
        'description'       => 'Вы легко можете ссылаться на другие объекты в вашей Кампании, с помощью следующих сокращений.',
        'formatting'        => [
            'text'  => 'Список разрешенных HTML тэгов и атрибутов можно найти на нашем :github.',
            'title' => 'Форматирование',
        ],
        'friendly_mentions' => 'Ссылайтесь на другие объекты, вводя :code и первые несколько символов названия объекта, чтобы найти его. Это вставит :example в текстовый редактор и отобразит ссылку на объект при просмотре.',
        'limitations'       => 'Пожалуйста, обратите внимание, что из-за технических ограничений эти сокращения не работают на мобильных устройствах Android.',
        'mentions'          => 'Ссылайтесь на другие объекты, вводя :code и первые несколько символов названия объекта, чтобы найти его. Это вставит :example в текстовый редактор. Чтобы изменить отображаемый текст ссылки, вы можете написать :example_name. Чтобы задать подстраницу объекта, используйте :example_page, чтобы задать вкладку - :example_tab.',
        'months'            => 'Введите :code, чтобы получить список месяцев из ваших Календарей.',
        'title'             => 'Ссылки на другие объекты и сокращения',
    ],
    'map'           => [
        'description'   => 'Загрузка карты для Локации создаст меню `Карта` на странице просмотра Локации и прямую ссылку на карту со страницы Локаций Кампании. Из просмотра Карты пользователи, которые могут редактировать Локацию, смогут включить "Редактор", который позволит размещать точки на карте. Они могут ссылаться на объекты или быть подписью и иметь разную форму и размер.',
        'private'       => 'Участники Кампании с ролью "Админ" могут сделать карту приватной. Это позволит пользователям просматривать Локацию, а Админам - сохранить карту секретом.',
        'title'         => 'Карты Локаций',
    ],
    'public'        => 'Посмотрите видео на YouTube, объясняющее публичные Кампании',
    'title'         => 'Помощь',
];
