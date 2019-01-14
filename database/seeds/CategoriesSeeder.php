<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'     => '手机 电话卡',
                'children' => [
                    ['name' => '小米MIX 3'],
                    ['name' => '小米8 青春版'],
                    ['name' => '小米8 屏幕指纹版'],
                    ['name' => '小米8'],
                    ['name' => '小米8 SE'],
                    ['name' => '小米MIX 2S'],
                    ['name' => '小米 6X'],
                    ['name' => '黑鲨游戏手机 Hello'],
                    ['name' => '黑鲨游戏手机'],
                    ['name' => '红米Note 7'],
                    ['name' => '红米6 Pro'],
                    ['name' => '红米6'],
                    ['name' => '红米6A'],
                    ['name' => '红米Note 5'],
                    ['name' => '移动 4G + 专区'],
                    ['name' => '对比手机'],
                    ['name' => '米粉卡 日租卡'],
                    ['name' => '小米移动 电话卡'],
                    ['name' => '手机上门维修'],
                    ['name' => '云服务间月卡'],
                    [
                        'name'     => '耳机',
                        'children' => [
                            ['name' => '有线耳机'],
                            ['name' => '蓝牙耳机'],
                        ],
                    ],
                ],
            ],
            [
                'name'     => '电视 盒子',
                'children' => [
                    ['name' => '米家激光投影电视'],
                    ['name' => '小米电视4A 32英寸'],
                    ['name' => '小米电视4A 43英寸青春版'],
                    ['name' => '小米电视4A 50英寸'],
                    ['name' => '小米电视4A 55英寸'],
                    ['name' => '小米电视4A 58英寸'],
                    ['name' => '小米电视4A 65英寸'],
                    ['name' => '小米电视4C 32英寸'],
                    ['name' => '小米电视4C 40英寸'],
                    ['name' => '小米电视4C 43英寸'],
                    ['name' => '小米电视4C 50英寸'],
                    ['name' => '小米电视4X 43英寸'],
                    ['name' => '小米电视4X 55英寸'],
                    ['name' => '小米电视 体育版'],
                    ['name' => '小米电视4 55英寸'],
                    ['name' => '小米电视4 65英寸旗舰版'],
                    ['name' => '小米电视4S 32英寸'],
                    ['name' => '小米电视4S 50英寸'],
                    ['name' => '小米电视4S 55英寸'],
                    ['name' => '小米电视4S 55英寸曲面'],
                    ['name' => '小米电视4S 65英寸'],
                    ['name' => '小米电视4S 65英寸Pro'],
                    ['name' => '小米电视4S 75英寸'],
                    ['name' => '小米盒子'],
                ],
            ],
            [
                'name'     => '笔记本 平板',
                'children' => [
                    ['name' => '小米笔记本'],
                    ['name' => '台式机'],
                    ['name' => '平板电脑'],
                    ['name' => '一体机'],
                    ['name' => '服务器'],
                    ['name' => '工作站'],
                ],
            ],
            [
                'name'     => '家电 插线板',
                'children' => [
                    ['name' => '智能机'],
                    ['name' => '老人机'],
                    ['name' => '对讲机'],
                ],
            ],
            [
                'name'     => '出行 穿戴',
                'children' => [
                    ['name' => '智能机'],
                    ['name' => '老人机'],
                    ['name' => '对讲机'],
                ],
            ],
            [
                'name'     => '智能 路由器',
                'children' => [
                    ['name' => '智能机'],
                    ['name' => '老人机'],
                    ['name' => '对讲机'],
                ],
            ],
            [
                'name'     => '电源 配件',
                'children' => [
                    ['name' => '智能机'],
                    ['name' => '老人机'],
                    ['name' => '对讲机'],
                ],
            ],
            [
                'name'     => '健康 儿童',
                'children' => [
                    ['name' => '智能机'],
                    ['name' => '老人机'],
                    ['name' => '对讲机'],
                ],
            ],
            [
                'name'     => '耳机 音箱',
                'children' => [
                    ['name' => '智能机'],
                    ['name' => '老人机'],
                    ['name' => '对讲机'],
                ],
            ],
            [
                'name'     => '生活 箱包',
                'children' => [
                    ['name' => '智能机'],
                    ['name' => '老人机'],
                    ['name' => '对讲机'],
                ],
            ],
        ];

        foreach ($categories as $data) {
            $this->createCategory($data);
        }
    }

    protected function createCategory($data, $parent = null)
    {
        // 创建一个新的类目对象
        $category = new Category(['name' => $data['name']]);
        // 如果有 children 字段则代表这是一个父类目
        $category->is_directory = isset($data['children']);
        // 如果有传入 $parent 参数，代表有父类目
        if (!is_null($parent)) {
            $category->parent()->associate($parent);
        }
        //  保存到数据库
        $category->save();
        // 如果有 children 字段并且 children 字段是一个数组
        if (isset($data['children']) && is_array($data['children'])) {
            // 遍历 children 字段
            foreach ($data['children'] as $child) {
                // 递归调用 createCategory 方法，第二个参数即为刚刚创建的类目
                $this->createCategory($child, $category);
            }
        }
    }
}
