CREATE TABLE `registration` (
	`uid` INT NOT NULL AUTO_INCREMENT ,
	`uname` VARCHAR( 32 ) NOT NULL ,
	`ucollege` VARCHAR( 128 ) NOT NULL ,
	`contact_no` VARCHAR( 64 ) NOT NULL ,
	`contact_mail` VARCHAR( 32 ) NOT NULL ,
	`accomodation` INT( 4 ) NOT NULL ,
	`event1` INT( 4 ) NOT NULL ,
	`event2` INT( 4 ) NOT NULL ,
	`event3` INT( 4 ) NOT NULL ,
	`event4` INT( 4 ) NOT NULL ,
	`event5` INT( 4 ) NOT NULL ,
	`event6` INT( 4 ) NOT NULL ,
	PRIMARY KEY ( `uid` ) 
) TYPE = MYISAM ;


// test insert data
INSERT INTO 
`registration` ( `uid` , `uname` , `ucollege` , `contact_no` , `contact_mail` , `accomodation` , `event1` , `event2` , `event3` , `event4` , `event5` , `event6` ) 
VALUES 
('', 'test', 'test college', '989898989', 'asdkjh@kjansd.com', '0', '1', '1', '0', '1', '0', '1');