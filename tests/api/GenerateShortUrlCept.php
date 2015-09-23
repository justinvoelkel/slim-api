<?php 
$I = new ApiTester($scenario);
$I->wantTo('generate a new short url');
$I->sendPOST('/api/generate', ['url'=>"http://budgetdumpster.com"]);
$I->seeResponseCodeIs(201);
$I->seeResponseIsJson();
