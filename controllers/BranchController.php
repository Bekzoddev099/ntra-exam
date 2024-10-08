<?php

declare(strict_types=1);

namespace Controller;

use App\Branch;

class BranchController
{
    public function index(): void
    {
        $branches = (new Branch())->getBranches();
        loadView('dashboard/branches', ['branches' => $branches]);
    }

    public function indexUser(): void
    {
        $branches = (new Branch())->getBranches();
        loadView('dashboard/user-branch', ['branches' => $branches]);
    }

    public function show(int $id): void
    {
        $branch = (new Branch())->getBranch($id);
        loadView('single-branch', ['branch' => $branch]);
    }

    public function branch($id): void
    {
        $branch = (new Branch())->getBranchSame($id);
        loadView('dashboard/branch', ['branch' => $branch]);

    }
}