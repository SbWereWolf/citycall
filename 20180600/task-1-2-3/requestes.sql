-- task 1
SELECT
  DATE(ocn.dt)      AS 'Дата дозвона',
  cl.TicketNumber   AS 'Номер задачи',
  TIME(ocn.dt)      AS 'Время дозвона',
  ch.reason_notdial AS 'Причина недозвона'
FROM ` outgoing_calls_naumen_2015-05` ocn
JOIN stat_naumen sn
ON sn.id = ocn.idStat
JOIN call_history ch
ON ch.id_stat = sn.id
JOIN call_list cl
ON cl.id = ch.id_call_list
WHERE
ch.status = 'Недозвон'
UNION
SELECT
  DATE(ocn.dt),
  cl.TicketNumber,
  TIME(ocn.dt),
  ch.reason_notdial
FROM ` outgoing_calls_naumen_2015-06` ocn
JOIN stat_naumen sn
ON sn.id = ocn.idStat
JOIN call_history ch
ON ch.id_stat = sn.id
JOIN call_list cl
ON cl.id = ch.id_call_list
WHERE
ch.status = 'Недозвон'
ORDER BY
1, 2, 3, 4;

-- task 2
SELECT
  cl.TicketNumber AS 'Номер задачи',
  ch.dt_status    AS 'Дата и время статуса',
  ch.status       AS 'Статус'
FROM call_history ch
  JOIN call_list cl
    ON cl.id = ch.id_call_list
WHERE
  ch.dt_status = (SELECT max(chi.dt_status)
                  FROM call_history chi
                  WHERE chi.id_call_list = ch.id_call_list);

-- task 3
CREATE TABLE names_reference
(
  id       INT PRIMARY KEY AUTO_INCREMENT,
  name     VARCHAR(100),
  datetime DATETIME
);
CREATE UNIQUE INDEX names_reference_name_uindex
  ON names_reference (name);

-- task 3
INSERT INTO names_reference (name, datetime) VALUE (:NAME, now())
ON DUPLICATE KEY UPDATE datetime = now();
