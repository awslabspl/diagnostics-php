-- Dialect: MySQL
-- Database
create function mysqlconnector () returns JSON
begin
    SELECT
        CONCAT("[",
               GROUP_CONCAT(
                       CONCAT("{username:'",username,"'"),
                       CONCAT(",email:'",email),"'}")
            )
         ,"]"
AS json FROM information_schema.ADMINISTRABLE_ROLE_AUTHORIZATIONS;
end;