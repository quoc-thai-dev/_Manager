<?php
function SUCCESS($msg)
{
    $res = new \stdClass;
    $res->_stats="Thành công";
    $res->_stats_n=1;
    $res->_msg=$msg;
    return json_encode($res);

}
function FAIL($msg)
{
    $res = new \stdClass;
    $res->_status="Thất bại";
    $res->_stats_n=0;
    $res->_msg=$msg;
    return json_encode($res);
}
