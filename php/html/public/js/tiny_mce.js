/**
 * Created by maxim on 25.10.17.
 */

tinymce.init({
    selector: 'textarea',
    branding: false,
    menubar: false,
    formats: {
        underline: {inline: 'u'}
    },
    toolbar: 'undo redo | bold italic underline strikethrough | superscript subscript charmap | table | uploadimage',
    imagetools_toolbar: "imageoptions",
    plugins: "autolink lists image table uploadimage imagetools charmap paste",
    relative_urls: false,
});
