CREATE TABLE address
(
  id         INT (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  number_azs VARCHAR(50)  NOT NULL,
  city_azs   VARCHAR(100) NOT NULL,
  street_azs VARCHAR(100) NOT NULL,
  region_azs VARCHAR(30)  NOT NULL
);
CREATE UNIQUE INDEX id
  ON address (id);

INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗК № 1', 'г. Хабаровск', 'ул. Шелеста, д.1', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 1', 'г. Хабаровск', 'ул. Тихоокеанская, д. 32', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 2', 'г. Хабаровск', 'ул. Краснореченская, д. 231', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 3', 'г. Хабаровск', 'Чернореченское ш., д. 2А', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 4', 'г. Хабаровск', 'ул. Воронежская, д. 17', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 5', 'г. Хабаровск', 'Восточное ш., д. 52', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 6', 'г. Хабаровск', 'Владивостокское шоссе, 15', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 7', 'г. Хабаровск', 'ул. Полярная, д. 80', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 8', 'г. Хабаровск', 'Восточное ш., д. 15', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 9', 'г. Хабаровск', 'ул.Красноводская, д. 3а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 10', 'г. Хабаровск', 'ул. Карла Маркса, д. 91', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 11', 'п. Маяк', 'ул. Центральная, д. 61', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 12', 'г. Хабаровск', 'ул. Даниловского М.П., д. 12а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 13', 'г. Хабаровск', 'ул. Целинная, 45', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 14', 'г. Хабаровск', 'пр-т 60 лет Октября - ул. Суворова', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 15', 'г. Хабаровск', 'ул. Победы, д. 66, р-н Онкоцентра', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 16', 'г. Хабаровск', 'ул. Промышленная, д. 18б', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 17', 'г. Хабаровск', 'ул. Карла Маркса, д. 178', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 18', 'г. Биробиджан', 'ул. Советская, д. 70г', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 20', 'п. Бира', 'ул. Партизанская, д. 93', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 21', 'г. Биробиджан', 'Биршоссе 4 км', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 22', 'п. Смидовичи', 'ул. Советская, д. 1в', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 23', 'п. Николаевка', 'ул. Шоссейная, д. 5', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 24', 'г. Комсомольск-на-Амуре', 'ул. Запорожская, д. 5', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 25', 'г. Комсомольск-на-Амуре', 'Северное ш., д. 1/3', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 26', 'г. Комсомольск-на-Амуре', 'Северное ш., д. 44/3', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 28', 'г. Амурск', 'Западное ш.', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 29', 'п. Селихино', 'п. Селихино', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 30', 'г. Комсомольск-на-Амуре', 'Магистральное ш.', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 31', 'п. Солнечный', '22 км автодороги Комсомольск-Солнечный-Горный', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 33', 'г. Комсомольск-на-Амуре', 'ул. Машинная, д. 26', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 34', 'г. Хабаровск', 'ул. Металлистов, д. 7', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 35', 'г. Хабаровск', 'ул. Ким-Ю-Чена, д. 44а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 36', 'г. Вяземский', 'ул. Шоссейная, д. 1а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 37', 'г. Вяземский', 'ул. Дзержинского, д. 2', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 38', 'п. Переяславка', 'п. Переяславка, 59 км трассы Хабаровск - Владивосток', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 39', 'п. Хор', 'ул. Комсомольская, д. 1а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 40', 'п. Новостройка', 'ул. Шоссейная, д. 26', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 41', 'г. Хабаровск', 'ул. Пионерская, д. 4', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 42', 'г. Хабаровск', 'Матвеевское ш., д. 39б', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 43', 'г. Хабаровск', 'ул. Бийская, д. 1а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 44', 'п. Корфовский', 'ул. Владивостокская, д. 19в', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 47', 'г. Облучье', 'г. Облучье', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 48', 'г. Биробиджан', 'ул. Пионерская, д. 62в', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 49', 'г. Хабаровск', 'ул. Широкая, д. 38', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 50', 'г. Хабаровск', 'ул. Тихоокеанская, д. 189б', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 51', 'с. Анастасьевка', 'ул. Полевая, д. 19', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 52', 'г. Хабаровск', 'ул. Краснодарская, д. 3а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 53', 'г. Хабаровск', 'ул. Большая, д. 81', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 54', 'г. Хабаровск', 'ул. Карла Маркса, д. 205в', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 55', 'г. Хабаровск', 'ул. Суворова', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 56', 'г. Хабаровск', 'ул. Трехгорная, д. 94', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 57', 'п. Троицкое', 'ул. 40 лет Победы, д. 47', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 58', 'п. Сита', '41 км автодороги Хабаровск - Находка', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 59', 'г. Хабаровск', 'ул. Нововыборгская, 50', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 61', 'г. Хабаровск', 'пр-т 60 лет Октября, д. 107а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 62', 'г. Хабаровск', 'ул. Краснореченская, д. 151', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 63', 'г. Хабаровск', 'Владивостокское шоссе, 2Ж', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 65', 'г. Хабаровск', 'ул. П. Морозова, д. 28', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 66', 'г. Хабаровск', ' ул. Дистанционная ', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 67', 'п. Лидога', '215 км тр. Хабаровск-Комсомольск', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 68', 'п. Березовый', 'п. Березовый, ул. Лесная, д. 68', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 69', 'п. Котиково', 'ул. Центральная', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 70', 'г. Хабаровск', 'ул. Аксенова, д. 37', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 71', 'п. Гаровка', 'развязка автодорог п. Ракитное - п. Гаровка - п. Сергеевка', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 72', 'п. Ильинка', '3-4 км путепровода п. Ильинка - г. Владивосток', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 73', 'п. Ильинка', 'ул. Гаражная, д. 2', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 74', 'п. Теплое озеро', 'п. Теплоозерск', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 75', 'г. Хабаровск', 'ул. Горького, 2 А', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 76', 'с. Лермонтовка', '178 км тр. Хабаровск-Владивосток', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 77', 'г. Бикин', '215 км тр. Хабаровск - Владивосток', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 78', 'г. Биробиджан', 'ул. 40-лет Победы, д.2а', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 79', 'с. Пашково', '1816 км а/д Амур-Чита-Хабаровск', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 80', 'г. Хабаровск', 'ул. Космическая, д. 16', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 81', 'г. Хабаровск', 'ул. П. Морозова, д. 4а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 82', 'г. Хабаровск', 'ул. Совхозная, д. 79а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 83', 'г. Хабаровск', 'ул. Волочаевская, д. 66', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 85', 'г. Хабаровск', 'пр-т 60-лет Октября (Депо), д. 128в', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 86', 'г. Хабаровск', 'пр-т 60-лет Октября (Рынок), д. 67а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 87', 'п. Кирга', '1975 км тр. Чита-Хабаровск', 'Еврейская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 88', 'г. Хабаровск', 'ул. Воронежская, д. 143', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 89', 'п. Мирное', '12 км. а/д Хабаровск-Находка-Чистополье', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 90', 'п. Черная речка', '16 км а/д Хабаровск-Находка', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 91', 'г. Бикин', 'ул. Новая, 221 км тр. М60 Хабаровск-Владивосток', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 92', 'г. Хабаровск', 'ул. Калинина, д. 3', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 93', 'г. Хабаровск', 'ул. Пионерская, д. 2а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 94', 'г. Хабаровск', 'ул. Ворошилова, д. 9а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 95', 'г. Хабаровск', 'ул. Автобусная, д. 100', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 96', 'г. Хабаровск', 'ул. Мостовая, д. 22а', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 97', 'г. Хабаровск', 'ул. Краснореченская, 31', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 98', 'г. Хабаровск', 'ул. Краснореченская, 161', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 99', 'г. Хабаровск', 'ул. Большая, д. 100', 'Хабаровский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 1', 'г. Благовещенск', 'ул. Кольцевая, д.17/3', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 2', 'г. Благовещенск', 'ул. Магистральная', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 3', 'г. Благовещенск', 'ул. Октябрьская', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 4', 'г. Благовещенск', 'ул. Лазо', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 5', 'с. Тамбовка', 'въезд в село', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 6', 'г. Благовещенск', 'Новотроицкое ш.', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 7', 'г. Тында', 'ул. Мохортова 2 а', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 8', 'г. Тында', 'ул. Советская 62', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 9', 'г. Благовещенск', 'Новотроицкое ш.', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 10', 'п. Архара', 'тр. Чита-Хабаровск, поворот в поселок', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 11', 'п. Архара', 'ул. Восточная', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 12', 'г. Белогорск', 'ул. Матросская, д. 62', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 15', 'с. Возжаевка', 'тр. Чита-Хабаровск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 17', 'п. Чигири', 'въезд в поселок', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 19', 'п. Новокиевский увал', 'выезд с поселка', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 20', 'г. Райчихинск', 'ул. Победы, д. 6', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 22', 'п. Новобурейский', 'ул. Литейная, д. 19', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 24', 'г. Завитинск', 'ул. Мухина', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 25', 'с. Екатеринославка', 'въезд в село', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 27', 'с. Константиновка', 'центр', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 28', 'п. Прогресс', 'ул. Набережная', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 30', 'п. Поярково', 'ул. Советская, д. 50', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 31', 'г. Благовещенск', 'ул. Заводская', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 32', 'с. Ромны', 'въезд в село', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 33', 'г. Свободный', 'ул. М-Чесноковская, д. 16', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 34', 'г. Свободный', 'ул. Амурская, д. 18', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 36', 'с. Подгорное', 'тр. Благовещенск-Свободный', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 37', 'с. Ивановка', 'въезд в село', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 39', 'с. Березовка', 'тр. Благовещенск-Белогорск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 40', 'п. Серышево', 'ул. Украинская, д. 2', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 41', 'г. Сковородино', 'ул. Красноармейская, д. 98', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 43', 'г. Зея', 'ул. Мухина, д. 320', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 45', 'п. Магдагачи', 'ул. Аэропортная, д. 23', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 47', 'п. Тыгда', 'ул. Станционная, д. 66', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 48', 'с. Гащенка', 'тр. Чита-Хабаровск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 50', 'г. Благовещенск', 'ул. Мухина-ш. Игнатьевское', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 51', 'п. Новобурейский', 'тр. Чита-Хабаровск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 53', 'п. Малиновка', 'тр. Чита-Хабаровск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 54', 'г. Шимановск', 'ул. Перская, д. 12', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 55', 'г. Завитинск', 'тр. Чита-Хабаровск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 56', 'п. Талакан', 'въезд в поселок', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 57', 'п. Талдан', 'тр. Чита-Хабаровск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 58', 'п. Сиваки', 'тр. Чита-Хабаровск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 61', '11 км. ', 'тр. Благовещенск-Райчихинск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 64', 'г. Благовещенск', 'ул. Пионерская - ул. Кольцевая', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 66', 'г. Благовещенск', 'ул. Театральная-пер. Строителей', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 67', 'г. Благовещенск', 'ул. Красноармейская - ул. Батарейная', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 68', 'г. Благовещенск', 'ул. Чайковского', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 70', 'п. Уруша', 'тр. Чита-Хабаровск 891 км', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 71', 'г. Белогорск', 'ул. Дорожная, д. 3', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 72', 'г. Зея', 'ул. Магистральная', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 73', 'п. Тыгда', 'тр. Чита-Хабаровск 1198 км', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 74', 'п. Большой Невер', 'тр. Чита- Хабаровск', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 75', 'г. Благовещенск', 'ул. Островского - ул. Октябрьская', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 76', 'г. Благовещенск', 'ул. Магистральная - ул. Калинина', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 78', 'г. Белогорск', 'ул. Кирова, д. 131', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 79', 'г. Белогорск', 'пер. Туманный, д. 1', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 80', 'г. Белогорск', 'ул. Кирова,  д. 310', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 81', 'г. Свободный', 'ул. Подгорная - ул. Инженерная', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 83', 'г. Шимановск', 'пер. Монтажный, д. 1а', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 84', 'г. Райчихинск', 'въезд в город', 'Амурская');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 1', 'Улан-Удэ', 'ул. Кабанская, 52', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 2', 'Улан-Удэ', 'ул. Брусничная, 1Б', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 3', 'Улан-Удэ', 'ул.Ботаническая, 8а', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 4', 'Улан-Удэ', 'пр.Автомобилистов 4д', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 5', 'Мухоршибирь', 'местность "Сурхара"', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 6', 'Татаурово', 'ул. Первомайская, 177', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 7', 'Улан-Удэ', 'ул.Тополиная 30', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 8', 'Хоринск', 'ул. Первомайская, 177А', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 9', 'Улан-Удэ', 'ул.Павлова, 56', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 10', 'Улан-Удэ', 'ул.Трубачеева 15а', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 11', 'Улан-Удэ', 'ул. Забайкальская, 8', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 12', 'с. Сотниково', 'ул.Магистральная 47', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 13', 'с. Нижний Саянтуй', 'ул. Солнечная, д. 62', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 14', 'Кабанский р-н, с. Береговая', 'ул. Трактовая, 85', 'Бурятия');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 1', 'г. Владивосток', 'Партизанский пр-т, 50', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 2', 'г. Владивосток', 'ул. Калинина, 20', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 3', 'г. Артем', 'п. Заводской, ул. Михайловская, 3/3', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 4', 'г. Владивосток', 'ул. Крыгина, 111', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 5', 'г. Владивосток', 'ул. Бородинская, 91', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 6', 'г. Владивосток', 'ул. Луговая, 89а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 7', 'г. Артем', 'c. Кневичи, ул. 1-я Западная, 20/1', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 8', 'г. Владивосток', 'ул. Снеговая, 42в', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 9', 'г. Владивосток', 'ул. Днепровская, 40в', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 10', 'г. Владивосток', 'ул. Маковского, 30', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 11', 'г. Владивосток', 'ул. Маковского, 280', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 14', 'г. Артем', 'ул. Чкалова, 1/1', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 15', 'г. Артем', 'ул. Фрунзе, 5', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 16', 'Хасанский район', 'п. Зарубино, ул. Набережная, 1а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 17', 'г. Артем', 'ул. Кирова, 152/3', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 19', 'Хасанский район', 'п. Славянка, ул. Калинина, 34', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 21', 'Хасанский район', 'п. Краскино, ул. Ленинская, 62а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 22', 'г. Уссурийск', 'ул Краснознаменная 167', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 23', 'г. Уссурийск', 'Владивостокское ш., 1а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 28', 'г. Уссурийск', 'ул. Раковская, 2в', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 29', 'с. Михайловка', 'ул. Ленинская, 182', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 31', 'с. Ивановка', 'ул. Краснознамённая, 73', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 32', 'с. Покровка', 'ул. Комсомольская, 1а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 34', 'п. Ярославский', 'ул. Светланская, 8', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 35', 'с. Черниговка', 'ул. Шоссейная,  54', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 36', 'с. Сибирцево', 'ул. Пролетарская,  58', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 37', 'п. Пограничный', 'ул. Ленина, 68', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 38', 'п. Камень Рыболов', 'ул. Димитрова, 2', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 39', 'с. Хороль', 'ул. Ленинская, 178', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 40', 'г. Спасск-Дальний', 'ул. Хабаровская, 16', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 43', 'г. Спасск-Дальний', 'ул. Советская, 282', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 44', 'п. Кировский', 'ул. Гагарина, 93', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 45', 'п. Лучегорск', 'тр. Хабаровск - Владивосток', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 46', 'г. Дальнереченск', 'ул. Тухачевского, 70', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 47', 'г. Дальнереченск', 'ул. 50 лет Октября, 95', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 48', 'г. Лесозаводск', 'ул. Григоренко, 24', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 50', 'с. Новопокровка', 'ул. Советская, 187', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 53', 'п. Лучегорск', '2,35 км северо западнее административного центра п Лучегорск', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 54', 'с. Сысоевка', 'ст. Сысоевка', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 55', 'г. Арсеньев', 'ул. Стахановская, 155', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 57', 'с. Яковлевка', 'ул. Советская, 167а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 58', 'с. Богуславец', 'ул. Плахотина, 2', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 59', 'с. Чугуевка', 'ул. Кустарная, 42', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 60', 'с. Анучино', '73 км гострассы Осиновка рудная пристань', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 62', 'п. Кавалерово', 'ул. Первомайская, 5', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 63', 'г. Дальнегорск', 'ул. Речная, 1', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 64', 'г. Дальнегорск', 'ул. 50 лет Октября, 243а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 65', 'п. Ольга', 'ул. Гагарина, 9', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 70', 'с. Варфоламеевка', 'ул. Почтовая, 15а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 71', 'п. Камень Рыболов', 'ул. 50 лет ВЛКСМ, 14', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 72', 'п. Горнореченск', 'ул Советская, 1а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 74', 'с. Пожарское', 'ул. Ленинская, 1а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 76', 'г. Арсеньев', 'трасса  Стахановка - Новиково', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 77', 'г. Арсеньев', 'ул. Островского', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 78', 'с. Чугуевка', 'ул. Титова  59а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 79', 'с. Анучино', '78 км гос. трассы  Осиновка - Рудная пристань', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 81', 'п. Новомихайловка', '180 км гос. трассы Осиновка - Рудная пристань', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 102', 'г. Артем', 'ул. Фрунзе, 19', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 103', 'г. Владивосток', 'пр-т 100-летия Владивостока, 27', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 104', 'г. Артем', 'п. Угловое, ул. Гагарина, 34', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 105', 'г. Владивосток', 'ул. 2-я Шоссейная (р-н Кока-Кола)', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 106', 'г. Владивосток', 'ул. Баляева, 95а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 107', 'г. Владивосток', 'ул. Снеговая, 2д', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 110', 'г. Владивосток', 'пр-т 100-летия Владивостока, 122', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 111', 'г. Владивосток', 'ул. Чапаева, 31а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 113', 'г. Владивосток', 'пр-т Красного знамени, 104а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 114', 'г. Владивосток', 'ул. Всеволода Сибирцева, 84а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 115', 'г. Владивосток', 'ул. Вилкова, 9д', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 116', 'г. Владивосток', 'ул. Снеговая, 55в', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 117', 'г. Владивосток', 'пр-т 100-летия Владивостока ,103б', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 118', 'г. Владивосток', 'ул. Светланская, 70', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 120', 'г. Владивосток', 'ул. Волгоградская 19а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 121', 'г. Владивосток', 'ул. Фадеева, 65', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 141', 'г. Артем', 'ул. Степановская, 48', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 142', 'п. Кипарисово', 'с. Кипарисово -1, гострасса Хабаровск - Владивосток', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 144', 'п. В-Надежденское', '723км тр. Хабаровск- Владивосток', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 145', 'п. В-Надежденское', '726км тр. Хабаровск- Владивосток', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 161', 'г. Уссурийск', 'Владивостокское шоссе, 38', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 162', 'г. Уссурийск', 'ул. Советская, 137', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 163', 'г. Уссурийск', 'ул. Краснознамённая, 162а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 164', 'г. Уссурийск', 'Новоникольское ш., 11б', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 192', 'с. Кремово', 'ул. Кирова, 54', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 231', 'п. Пограничный', '95 км автотрассы Уссурийск-Пограничный', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 271', 'г. Спасск-Дальний', 'ул. Герцена, 46', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 350', 'г. Находка', 'Находкинский  пр-т, 57', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 351', 'г. Находка', 'ул. Шоссейная, 231', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 352', 'г. Находка', 'ул. Мичманская, 1а', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 353', 'г. Находка', 'Автовокзал', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 354', 'г. Находка', 'ул. Шевченко', 'Приморский');
INSERT INTO address (number_azs, city_azs, street_azs, region_azs)
VALUES ('АЗС № 355', 'г. Находка', 'п. Врангель, Приморский пр-т, 32', 'Приморский');
