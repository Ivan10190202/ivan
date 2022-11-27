<?php

namespace app\controllers;

use app\models\Challenge;
use app\models\ChallengeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChallengeController implements the CRUD actions for Challenge model.
 */
class ChallengeController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Challenge models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ChallengeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $challenge = Challenge::find()->all();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'challenge'=>$challenge,
        ]);
    }

    /**
     * Displays a single Challenge model.
     * @param int $id_challenge Id Challenge
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_challenge)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_challenge),
        ]);
    }

    /**
     * Creates a new Challenge model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Challenge();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_challenge' => $model->id_challenge]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Challenge model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_challenge Id Challenge
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_challenge)
    {
        $model = $this->findModel($id_challenge);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_challenge' => $model->id_challenge]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Challenge model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_challenge Id Challenge
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_challenge)
    {
        $this->findModel($id_challenge)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Challenge model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_challenge Id Challenge
     * @return Challenge the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_challenge)
    {
        if (($model = Challenge::findOne(['id_challenge' => $id_challenge])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
