<?php

namespace App\Contracts;

interface UserContract
{
    public function findAllRolesbyUserType(string $userRole);
    public function countallUsersbytypestatus();

    public function findUsersBytype(string $type, $status = '');


    public function countUsers(string $type, mixed $status, string $search = '');
    public function countSms(string $usedfor, string $search = '');

    public function getList(string $type, $status, $start, $limit, $order, $dir, $search = null);
    public function getSmsList(string $usedfor, $start, $limit, $order, $dir, $search = null);

    public function updateStatus(array $attributes);

    public function storeDetails($request);
}
