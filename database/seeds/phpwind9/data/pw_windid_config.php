<?php

return [
    ['security.username.min', 'reg', '3', 'string', ''],
    ['security.username.max', 'reg', '15', 'string', ''],
    ['security.password.min', 'reg', '6', 'string', ''],
    ['security.password.max', 'reg', '15', 'string', ''],
    ['info.name', 'site', '用户管理中心', 'string', ''],
    ['time.cv', 'site', '0', 'string', ''],
    ['time.timezone', 'site', '8', 'string', ''],
    ['cookie.domain', 'site', '', 'string', ''],
    ['cookie.path', 'site', '', 'string', ''],
    ['debug', 'site', '0', 'string', ''],
    ['content.length', 'verify', '4', 'string', ''],
    ['content.questions', 'verify', 'a:0:{}', 'array', ''],
    ['content.showanswer', 'verify', '0', 'string', ''],
    ['content.type', 'verify', 'a:1:{i:0;s:1:"3";}', 'array', ''],
    ['randtype', 'verify', 'a:3:{i:0;s:4:"size";i:1;s:5:"angle";i:2;s:5:"graph";}', 'array', ''],
    ['showverify', 'verify', 'a:1:{i:0;s:11:"windidlogin";}', 'array', ''],
    ['type', 'verify', 'image', 'string', ''],
    ['voice', 'verify', '0', 'string', ''],
    ['width', 'verify', '240', 'string', ''],
    ['height', 'verify', '60', 'string', ''],
    ['key', 'verify', md5(rand()), 'string', ''],
    ['credits', 'credit', 'a:6:{i:1;a:4:{s:4:"name";s:6:"铜币";s:4:"unit";s:3:"枚";s:4:"open";s:1:"1";s:3:"log";s:1:"1";}i:2;a:4:{s:4:"name";s:6:"威望";s:4:"unit";s:3:"点";s:4:"open";s:1:"1";s:3:"log";s:1:"1";}i:3;a:4:{s:4:"name";s:6:"银元";s:4:"unit";s:3:"个";s:4:"open";s:1:"1";s:3:"log";s:1:"1";}i:4;a:2:{s:4:"name";s:6:"贡献";s:4:"unit";s:3:"点";}i:5;a:2:{s:4:"name";s:6:"鸡蛋";s:4:"unit";s:3:"个";}i:6;a:2:{s:4:"name";s:6:"鲜花";s:4:"unit";s:3:"朵";}}', 'array', ''],

];
