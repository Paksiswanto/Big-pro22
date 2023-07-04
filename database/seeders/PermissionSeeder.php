<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Permission::create([
            'name' => 'View_Invoice',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Invoice',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Invoice',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Invoice',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Customer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Customer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Customer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Customer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Bill',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Bill',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Bill',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Bill',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Supplier',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Supplier',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Supplier',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Supplier',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Account',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Account',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Account',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Account',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Transaction',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Transaction_Income',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Transaction_Income',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Transaction_Income',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Transaction_Income',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Transaction_Expenses',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Transaction_Expenses',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Transaction_Expenses',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Transaction_Expenses',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Transfer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Transfer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Transfer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Transfer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Income_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Income_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Income_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Income_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Expenditure_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Expenditure_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Expenditure_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Expenditure_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Tax_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Tax_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Tax_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Tax_summary',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Profit_and_loss',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Profit_and_loss',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Profit_and_loss',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Profit_and_loss',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Balance',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Cash_flow',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Expenses_by_category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Debt',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Profit_and_loss_widget',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Receivables',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Calender',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_User',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_User',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_User',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_User',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Profil',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Profil',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Role',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Role',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Role',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Role',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Company_general',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Company_general',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Company_general',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Item',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Item',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Item',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Item',
            'guard_name'=>'web'
        ]);
        Permission::create([
            'name' => 'View_Dashboard',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Import',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Export',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Category',
            'guard_name' => 'web',
        ]);
       
        Permission::create([
            'name' => 'View_Tax',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Tax',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Tax',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete_Tax',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Company',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Company',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Company',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Invoice_setting',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Invoice_setting',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Email',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View_Report',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create_Report',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit_Email',
            'guard_name' => 'web',
        ]);
    }
}
