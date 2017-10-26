/**
 * Created by maxim on 26.10.17.
 */
$(function () {
    $('#add-file').on('click', function () {
        var div = document.createElement('div');
        div.className = 'file-item';

        div.innerHTML = '<div class="form-group file"><input type="file" name="file"></div>' +
            '<button class="delete-file" type="button">Удалить файл</button>';

        document.getElementById('file-wrapper').appendChild(div);
        $('.delete-file').on('click', function () {
            this.parentNode.remove();
        });
    });
    $('.delete-file').on('click', function () {
        this.parentNode.remove();
    });
});
