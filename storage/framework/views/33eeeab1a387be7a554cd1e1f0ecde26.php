<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h2 class="panel">Lista de Alunos</h2>
    <div class="panel">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Faixa</th>
                        <th>Data de nascimento</th>
                        <th>CPF</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->id); ?></td>
                    <td><?php echo e($student->name); ?></td>
                    <td><?php echo e($student->address); ?></td>
                    <td><?php echo e($student->belt); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($student->birth_date))); ?></td>
                    <td><?php echo e(substr($student->cpf, 0, 3) . '.' . substr($student->cpf, 3, 3) . '.' . substr($student->cpf, 6, 3) . '-' . substr($student->cpf, 9, 2)); ?></td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="<?php echo e(route('students.delete', ['id' => $student->id])); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</body>

</html><?php /**PATH D:\projeto\budo-new\resources\views/panel.blade.php ENDPATH**/ ?>