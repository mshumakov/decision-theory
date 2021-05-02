<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\ValueObject\Variant;

/**
 * [Описание]
 * Суть метода состоит в том, что ЛПР выделяет главный критерий,
 * а на остальные критерии накладывает требования, чтобы они были
 * не меньше задаваемых им минимальных (пороговых) значений.
 *
 * [Использование]
 * Этот метод целесообразно применять, когда ЛПP может
 * обоснованно назначить значения или указать узкие пределы для них.
 *
 * [Проблемы]
 * Недостатки этого метода:
 *  - Оптимизация проводится по существу по одному критерию,
 *    а остальные могут принимать значения на границе допустимой области;
 *  - В методе главного критерия ограничения на критерий могут привести к неразрешимости задачи.
 */
class MainCriterionMethodHandler extends Handler
{
    /**
     * [Математическая модель]
     * Первым делом требуется определить исходные переменные математической модели:
     *  x1 - ключевое показатель по первому объекту
     *  x2 - ключевое показатель по второму объекту
     *
     * [Целевые функции]:
     *  z1(X) = Ax1 + Bx2 -> max
     *  z2(X) = Cx1 + Dx2 -> max
     *
     * [Итоговая целевая функция]:
     * E.g., z2(X) = Cx1 + Dx2 -> max, при ограничениях
     * [
     *   N1x1 + N2x2 >= t1    (variable)
     *   N3x1 + N3x2 <= const (e.g. 10)
     *   N5x1 + N6x2 <= const (e.g. 4)
     *   N7x1 + N8x2 <= const (e.g. 2.4)
     *   x1, x2      >= 0.
     * ]
     *
     * @link https://edu.susu.ru/pluginfile.php/5525155/mod_resource/content/3/L_r_02.pdf
     */
    public function handle(Variant $variant, array $restrictions): ?float
    {
        // @todo[mshumakov]: Add builder (objective function normalization).
        $builder = 0.0;

        // @todo[mshumakov]: Add restrictions + change signature to abstraction.
        return $this->findSolution($builder);
    }
}
