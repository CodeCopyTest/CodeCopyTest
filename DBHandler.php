<?php 
/* commit 테스트 22
 */

class DBHandler extends MySql
{
    private $server = '';                   //서버 아이피, 서버 내에서 구동된다면 localhost
    private $username = '';                 //계정 이름
    private $password = '';                 //패스워드
    private $database = '';                 //접속 db
    private $charset = "utf8";              //캐릭터 셋

    private $tb_name 	= "";                   //접속할 테이블 이름
	private $columns	= "*";                  //접속할 컬럼 이름
    private $join_tb_name	= "";               //조인할 테이블 이름


    
}

?>
