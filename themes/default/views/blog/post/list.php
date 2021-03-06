<?php $this->pageTitle = Yii::t(
    'BlogModule.blog',
    'Posts list with tag "{tag}"',
    ['{tag}' => CHtml::encode($tag)]
); ?>

<?php $this->breadcrumbs = [
    Yii::t('BlogModule.blog', 'Blogs') => ['/blog/blog/index/'],
    Yii::t('BlogModule.blog', 'Posts list'),
]; ?>

<p><?php echo Yii::t('BlogModule.blog', 'Posts with tag'); ?> <strong><?php echo CHtml::encode($tag); ?></strong>...</p>

<?php foreach ($posts as $post): ?>
    <?php $this->renderPartial('_post', ['data' => $post]); ?>
<?php endforeach; ?>
