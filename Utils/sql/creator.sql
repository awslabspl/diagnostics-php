-- Schema
create schema diagnostics;

-- Tables
-- datasources
create table if not exists diagnostics.datasources (
    did int primary key auto_increment,
    datasource_name varchar(16) not null,
    timeCreated timestamp
);

-- checks
create table if not exists diagnostics.checks (
    cid int primary key auto_increment,
    check_name varchar(32) not null,
    check_creationTime timestamp,
    required boolean
);

-- tests
create table if not exists diagnostics.tests (
    tid int primary key auto_increment,
    test_name varchar(32) not null,
    test_creationTime timestamp,
    required boolean
);

-- Functions
-- display
create function datadisplay() returns JSON
begin
    select * from diagnostics.checks group by required;
    select * from diagnostics.tests group by required;
end;