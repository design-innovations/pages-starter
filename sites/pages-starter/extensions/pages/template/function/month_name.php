<?php

return function ( $month )
{
	return DateTime::createFromFormat('!m', $month)->format('F');
};