

<a href="#" class="nav-link" id="bd" data-toggle="modal" data-target="#modalLoginForm">Добавить</a>
<!-- Modal -->
<div class="modal card_edit_comment" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <form method="post" id="data-form" name="data-form" enctype="multipart/form-data" class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100 font-weight-bold">Добавить курсовую работу или проект</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-subject">Дисциплина</label>
                    <input name="subject" type="text" id="defaultForm-subject" class="form-control validate">
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-topic">Тема</label>
                    <input name="topic"  type="text" id="defaultForm-topic" class="form-control validate">
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-semester">Семестр</label>
                    <input name="semester"  type="text" id="defaultForm-semester" class="form-control validate">
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-rating">Оценка</label>
                    <input name="rating" type="text" id="defaultForm-rating" class="form-control validate">
                </div>
                <div class="md-form">
                    <span>Upload a File:</span>
                    <input type="file" name="uploadedFile" accept=".jpg, .pdf, .jpeg" />
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Добавить</button>
            </div>
        </form>
    </div>
</div>
