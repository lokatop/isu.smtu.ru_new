<div class="main">
    <div class="jumbotron-fluid">
       <form method="post" id="data-form" name="data-form" enctype="multipart/form-data" class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100 font-weight-bold">Добавить курсовую работу или проект</h5>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-subject">Дисциплина</label>
                    <input name="subject" type="text" value="<?php if(isset($subject)) echo $subject?>" id="defaultForm-subject" class="form-control validate">
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-topic">Тема</label>
                    <input name="topic"  type="text" value="<?php if(isset($topic)) echo $topic?>" id="defaultForm-topic" class="form-control validate">
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-semester">Семестр</label>
                    <input name="semester"  type="text" value="<?php if(isset($semester)) echo $semester?>" id="defaultForm-semester" class="form-control validate">
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-rating">Оценка</label>
                    <input name="rating" type="text" value="<?php if(isset($rating)) echo $rating?>" id="defaultForm-rating" class="form-control validate">
                </div>
                <div class="md-form">
                    <span>Upload a File:</span>
                    <input type="file" name="uploadedFile" accept=".jpg, .pdf, .jpeg" />
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">

                <?php if (empty($id)) : ?>
                    <button value="add" class="btn btn-primary" type="submit">Добавить</button>
                <?php else: ?>
                    <button onClick="window.parent.jQuery.fancybox.close();" name="update" value="update" class="btn btn-primary" type="submit">Обновить</button>
                    <button onClick="window.parent.jQuery.fancybox.close();" name="delete" value="delete" class="btn btn-primary" type="submit">Удалить</button>
                <?php endif; ?>
            </div>
        </form>
    </div>
</div>

