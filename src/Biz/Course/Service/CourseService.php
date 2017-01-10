<?php

namespace Biz\Course\Service;

interface CourseService
{
    public function getCourse($id);

    public function findCoursesByIds($ids);

    public function findPublishedCoursesByCourseSetId($courseSetId);

    public function findCoursesByCourseSetId($courseSetId);

    public function getDefaultCourseByCourseSetId($courseSetId);

    public function getFirstPublishedCourseByCourseSetId($courseSetId);

    public function createCourse($course);

    public function createChapter($chapter);

    public function updateChapter($courseId, $chapterId, $fields);

    public function updateCourse($id, $fields);

    public function updateCourseMarketing($id, $fields);

    public function updateCourseStatistics($id, $fields);

    public function deleteCourse($id);

    public function closeCourse($id);

    public function publishCourse($id, $userId);

    public function findCourseItems($courseId);

    public function tryManageCourse($courseId, $courseSetId = 0);

    public function getNextNumberAndParentId($courseId);

    public function tryTakeCourse($courseId);

    public function canTakeCourse($course);

    public function findStudentsByCourseId($courseId);

    public function findTeachersByCourseId($courseId);

    public function countStudentsByCourseId($courseId);

    public function getUserRoleInCourse($courseId, $userId);

    /**
     * @param  integer   $userId
     * @return array[]
     */
    public function findTeachingCoursesByUserId($userId);

    /**
     * @param  integer   $userId
     * @return array[]
     */
    public function findLearnCoursesByUserId($userId);

    /**
     * @param  array     $ids
     * @return array[]
     */
    public function findPublicCoursesByIds(array $ids);

    //---start 前两个已经重构了，后面的四个也需要重构，目前还没有用到，用到的时候在重构
    public function findUserLeaningCourseCount($userId, $filters = array());

    public function findUserLeaningCourses($userId, $start, $limit, $filters = array());

    public function findUserLeanedCourseCount($userId, $filters = array());

    public function findLearnedCoursesByCourseIdAndUserId($courseId, $userId);

    // public function findUserLearnCourses($userId, $start, $limit);

    //public function findUserLearnCourseCount($userId);

    public function findUserTeachCourseCount($conditions, $onlyPublished = true);

    public function findUserTeachCourses($conditions, $start, $limit, $onlyPublished = true);

    //---end
    public function searchCourses($conditions, $sort, $start, $limit);

    public function searchCourseCount($conditions);

    public function sortCourseItems($courseId, $ids);

    public function deleteChapter($courseId, $chapterId);
}