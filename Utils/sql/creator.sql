create schema diagnostics;
create table if not exists datasources (
    did int primary key auto_increment,
    datasource_name varchar(16) not null,
    timeCreated timestamp
);

create table if not exists checks (
    cid int primary key auto_increment,
    check_name varchar(32) not null,
    check_creationTime timestamp,
    required boolean
);

create table if not exists tests (
    tid int primary key auto_increment,
    test_name varchar(32) not null,
    test_creationTime timestamp,
    required boolean
);

/*create function mysqlconnector () returns JSON
begin
    SELECT
        CONCAT("[",
               GROUP_CONCAT(
                       CONCAT("{datasource_name:'",datasorce_name,"'"),
                       CONCAT(",email:'",email),"'}")
            )
         ,"]"
        AS json FROM datasources;
end;*/