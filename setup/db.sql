-- DROP DATABASE ItAce;
CREATE DATABASE IF NOT EXISTS ItAce CHARACTER SET utf8;

USE ItAce;

-- DROP TABLE IF EXISTS MstEmployee;
-- DROP TABLE IF EXISTS MstAttendance;

CREATE TABLE IF NOT EXISTS MstEmployee
(
    EmployeeID       VARCHAR(5)  NOT NULL PRIMARY KEY,
    EmployeeName     VARCHAR(30) NOT NULL,
    Password         VARCHAR(12) NOT NULL,
    UserClass        VARCHAR(1),
    RegistDate       DATETIME,
    UpdateDate       DATETIME,
    LastUpdateUserID VARCHAR(5)
) ENGINE=InnoDB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
;

INSERT IGNORE INTO MstEmployee
(
    EmployeeID,
    EmployeeName,
    Password,
    UserClass,
    RegistDate,
    UpdateDate,
    LastUpdateUserID
)
VALUES
    ('90000', 'サンプルマスタ１', 'testMaster1', '1', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000'),
    ('90001', 'サンプルユーザ１', 'testUser1',   '0', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000'),
    ('90002', 'サンプルユーザ２', 'testUser2',   '0', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000'),
    ('90003', 'サンプルユーザ３', 'testUser3',   '0', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000'),
    ('90004', 'サンプルユーザ４', 'testUser4',   '0', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000'),
    ('90005', 'サンプルユーザ５', 'testUser5',   '0', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000'),
    ('90006', 'サンプルユーザ６', 'testUser6',   '0', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000'),
    ('90007', 'サンプルユーザ７', 'testUser7',   '0', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000'),
    ('90008', 'サンプルユーザ８', 'testUser8',   '0', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000'),
    ('90009', 'サンプルユーザ９', 'testUser9',   '0', '2017-09-01 12:34:56', '2017-09-01 12:34:56','90000')
;

CREATE TABLE IF NOT EXISTS MstAttendance
(
    EmployeeID       VARCHAR(5) NOT NULL,
    Year             INTEGER(4) NOT NULL,
    Month            INTEGER(2) NOT NULL,
    Day              INTEGER(2) NOT NULL,
    StartTime        VARCHAR(5),
    CloseTime        VARCHAR(5),
    BreakTime        VARCHAR(5),
    LateLeaveEarly   VARCHAR(30),
    VacationInfo     VARCHAR(30),
    WorkDetail       VARCHAR(100),
    RegistDate       DATETIME,
    UpdateDate       DATETIME,
    LastUpdateUserID VARCHAR(5),
    PRIMARY KEY
    (
        EmployeeID,
        Year,
        Month,
        Day
    )
) ENGINE=InnoDB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
;

INSERT IGNORE INTO MstAttendance
(
    EmployeeID,
    Year,
    Month,
    Day,
    StartTime,
    CloseTime,
    BreakTime,
    LateLeaveEarly,
    VacationInfo,
    WorkDetail,
    RegistDate,
    UpdateDate,
    LastUpdateUserID
)
VALUES
    ('90001', '2017', '09', '01', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-01 12:34:56', '2017-09-01 12:34:56', '90001'),
    ('90001', '2017', '09', '04', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-04 12:34:56', '2017-09-04 12:34:56', '90001'),
    ('90001', '2017', '09', '05', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-05 12:34:56', '2017-09-05 12:34:56', '90001'),
    ('90001', '2017', '09', '06', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-06 12:34:56', '2017-09-06 12:34:56', '90001'),
    ('90001', '2017', '09', '07', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-07 12:34:56', '2017-09-07 12:34:56', '90001'),
    ('90001', '2017', '09', '08', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-08 12:34:56', '2017-09-08 12:34:56', '90001'),
    ('90001', '2017', '09', '11', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-11 12:34:56', '2017-09-11 12:34:56', '90001'),
    ('90001', '2017', '09', '12', '11:00', '18:00', '01:00', '電車遅延の為', '',     '',         '2017-09-12 12:34:56', '2017-09-12 12:34:56', '90001'),
    ('90001', '2017', '09', '13', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-13 12:34:56', '2017-09-13 12:34:56', '90001'),
    ('90001', '2017', '09', '14', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-14 12:34:56', '2017-09-14 12:34:56', '90001'),
    ('90001', '2017', '09', '15', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-15 12:34:56', '2017-09-15 12:34:56', '90001'),
    ('90001', '2017', '09', '18', '09:00', '18:30', '01:00', '',             '',     '',         '2017-09-18 12:34:56', '2017-09-18 12:34:56', '90001'),
    ('90001', '2017', '09', '19', '09:00', '19:00', '01:00', '',             '',     '',         '2017-09-19 12:34:56', '2017-09-19 12:34:56', '90001'),
    ('90001', '2017', '09', '20', '09:00', '19:30', '01:00', '',             '',     '',         '2017-09-20 12:34:56', '2017-09-20 12:34:56', '90001'),
    ('90001', '2017', '09', '21', '09:00', '20:00', '01:00', '',             '',     '',         '2017-09-21 12:34:56', '2017-09-21 12:34:56', '90001'),
    ('90001', '2017', '09', '22', '09:00', '20:30', '01:00', '',             '',     '',         '2017-09-22 12:34:56', '2017-09-22 12:34:56', '90001'),
    ('90001', '2017', '09', '25', '',      '',      '',      '',             '有給', '使用の為', '2017-09-25 12:34:56', '2017-09-25 12:34:56', '90001'),
    ('90001', '2017', '09', '26', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-26 12:34:56', '2017-09-26 12:34:56', '90001'),
    ('90001', '2017', '09', '27', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-27 12:34:56', '2017-09-27 12:34:56', '90001'),
    ('90001', '2017', '09', '28', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-28 12:34:56', '2017-09-28 12:34:56', '90001'),
    ('90001', '2017', '09', '29', '09:00', '18:00', '01:00', '',             '',     '',         '2017-09-29 12:34:56', '2017-09-29 12:34:56', '90001')
;
