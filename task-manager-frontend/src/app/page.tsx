
import TaskCard from './components/TaskCard';

export default async function Page() {
  console.log(process.env.NEXT_PUBLIC_API_BASE_URL);
  const data = await fetch(`${process.env.NEXT_PUBLIC_API_BASE_URL}/v1/tasks`, { cache: 'no-store' });
  const tasks = await data.json();

  return (
    <div className="max-w-5xl mx-auto px-6 py-10">
      <h1 className="text-4xl font-bold text-center mb-12 text-blue-600">Task Dashboard</h1>
      <ul className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        {tasks.data.map(({ id, title, description, status }) => (
          <TaskCard
            key={id}
            title={title}
            description={description}
            status={status}
          />
        ))}
      </ul>
    </div>
  );
}
