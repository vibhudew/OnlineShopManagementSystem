<?php

namespace App\DataTables;

use App\Models\Expense;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ExpenseDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
<<<<<<< HEAD
<<<<<<< HEAD
            ->addColumn('action', 'expense.action');
=======
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
            ->addColumn('action', function( $data ){ 


                return '<a class="btn btn-danger" href="/deleteexpense/'.$data->id.'">Delete</a>'; // or simply return html here
            } );
<<<<<<< HEAD
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Expense $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Expense $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('expense-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
<<<<<<< HEAD
<<<<<<< HEAD
                    ->orderBy(1)
        
                    ;

=======
                    ;
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
                    ;
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            'id',
            'name',
            'category',
            'date',
            'amount',
            'contact',
            'description'
=======
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1

            Column::make('id')->title('ID'),
            Column::make('name')->title('Name'),
            Column::make('category')->title('Category'),
            Column::make('date')->title('Date'),
            Column::make('amount')->title('Amount'),
            Column::make('contact')->title('Contact'),
            Column::make('description')->title('Description'),
            Column::make('action')->title('Action'),

<<<<<<< HEAD
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Expense_' . date('YmdHis');
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
    
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
    }
}
