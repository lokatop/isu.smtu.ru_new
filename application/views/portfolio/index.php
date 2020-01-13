
<?php include_once 'application/views/layouts/header.php' ?>
<main>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Сведения о курсовых работах и курсовых проектах</h2>
        </div>

        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row"><div class="col-sm-12 table-responsive">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable no-footer" id="basic-datatable" role="grid" aria-describedby="basic-datatable_info">
                                <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="№ п/п: activate to sort column descending" style="width: 88px;">№ п/п</th><th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Дисциплина, тема, семестр: activate to sort column ascending" style="width: 339px;">Дисциплина, тема, семестр</th><th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Оценка: activate to sort column ascending" style="width: 102px;">Оценка</th></tr>
                                </thead>
                                <tbody>
                                <?php
                                if (!empty($list)) : ?>
                                    <?php $i=1; $probel = ', ';
                                    foreach ($list as $val): ?>
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">
                                            <a class="fancybox-data-edit" data-type="iframe" data-src="/module/portfolio/edit_portfolio_practice/<?php echo $val['id'] ?>" href="javascript:;">
                                                 <?php echo $i; ?>
                                            </a>
                                            </td>
                                        <td>
                                            <?php echo $val['subject']
                                                .$probel.$val['topic']
                                                .$probel.$val['semester'].' семестр'; ?>
                                        </td>
                                        <td><?php echo $val['rating']; ?>
                                        </td>
                                        </tr>
                                        <?php $i++;?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <tr class="gradeA odd" role="row">
                                    <td class="sorting_1"></td>
                                    <td>
                                        <!--  fancyBox -->
                                        <a href="javascript:;" type="button" class="card_edit_comment btn-main">добавить!</a>
                                    </td>

                                    <td></td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="clearfix">
                                <?php echo $pagination; ?>
                            </div>
                            <?php include_once 'application/utils/SettingsUploadFiles.php'?>
                            <?php include_once 'application/utils/FromUploadFiles.php'?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include_once 'application/views/layouts/footer.php' ?>

<script>
    $('[data-fancybox="edit"]').fancybox({
        'afterClose'  : function() {
            alert('Done!');
        }
    });
</script>