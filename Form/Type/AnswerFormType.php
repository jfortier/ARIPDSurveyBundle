<?php

namespace ARIPD\Bundle\SurveyBundle\Form\Type;

use ARIPD\Bundle\SurveyBundle\Entity\Answer;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AnswerFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', 'text', array('label' => 'label.answer'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver
                ->setDefaults(array('data_class' => get_class(new Answer()),));
    }

    public function getName() {
        return 'aripdsurvey_answerformtype';
    }

}
