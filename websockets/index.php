<?php
use vendor\OpenSwoole\WebSocket\{Server, Frame};
use vendor\OpenSwoole\Constant;
use vendor\OpenSwoole\Table;
$server = new Server("0.0.0.0", 9501, Server::SIMPLE_MODE, Constant::SOCK_TCP);
$fds = new Table(1024);
$fds->column('fd', Table::TYPE_INT, 4);
$fds->column('name', Table::TYPE_STRING, 16);
$fds->create();