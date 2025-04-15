<?php
$query = " SELECT
              o.id,
              o.code,
              o.parent_code,
              o.name
                 FROM organization o
                    where o.code in (
                    select c.parent_code from organization c
                    where c.code = '". $user[0]->kode_organisasi ."'
                        )
           ";

$organization = DB::select(DB::raw($query) ); 
?>
